<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/13 21:28:18
?>
<?php

/**
 * autoQuestion actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage autoQuestion
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 3501 2007-02-18 10:28:17Z fabien $
 */
class autoQuestionActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('question', 'list');
  }

  public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/question/filters');

    // pager
    $this->pager = new sfPropelPager('Question', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', 1));
    $this->pager->init();
  }

  public function executeCreate()
  {
    return $this->forward('question', 'edit');
  }

  public function executeSave()
  {
    return $this->forward('question', 'edit');
  }

  public function executeEdit()
  {
    $this->question = $this->getQuestionOrCreate();

    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->updateQuestionFromRequest();

      $this->saveQuestion($this->question);

      $this->setFlash('notice', 'Your modifications have been saved');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('question/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('question/list');
      }
      else
      {
        return $this->redirect('question/edit?id='.$this->question->getId());
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  public function executeDelete()
  {
    $this->question = QuestionPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->question);

    try
    {
      $this->deleteQuestion($this->question);
    }
    catch (PropelException $e)
    {
      $this->getRequest()->setError('delete', 'Could not delete the selected Question. Make sure it does not have any associated items.');
      return $this->forward('question', 'list');
    }

    return $this->redirect('question/list');
  }

  public function handleErrorEdit()
  {
    $this->preExecute();
    $this->question = $this->getQuestionOrCreate();
    $this->updateQuestionFromRequest();

    $this->labels = $this->getLabels();

    return sfView::SUCCESS;
  }

  protected function saveQuestion($question)
  {
    $question->save();

  }

  protected function deleteQuestion($question)
  {
    $question->delete();
  }

  protected function updateQuestionFromRequest()
  {
    $question = $this->getRequestParameter('question');

    if (isset($question['description']))
    {
      $this->question->setDescription($question['description']);
    }
    if (isset($question['answer_a']))
    {
      $this->question->setAnswerA($question['answer_a']);
    }
    if (isset($question['answer_b']))
    {
      $this->question->setAnswerB($question['answer_b']);
    }
    if (isset($question['answer_c']))
    {
      $this->question->setAnswerC($question['answer_c']);
    }
    if (isset($question['answer_d']))
    {
      $this->question->setAnswerD($question['answer_d']);
    }
    if (isset($question['department_id']))
    {
    $this->question->setDepartmentId($question['department_id'] ? $question['department_id'] : null);
    }
    if (isset($question['level']))
    {
      $this->question->setLevel($question['level']);
    }
  }

  protected function getQuestionOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $question = new Question();
    }
    else
    {
      $question = QuestionPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($question);
    }

    return $question;
  }

  protected function processFilters()
  {
    if ($this->getRequest()->hasParameter('filter'))
    {
      $filters = $this->getRequestParameter('filters');

      $this->getUser()->getAttributeHolder()->removeNamespace('sf_admin/question/filters');
      $this->getUser()->getAttributeHolder()->add($filters, 'sf_admin/question/filters');
    }
  }

  protected function processSort()
  {
    if ($this->getRequestParameter('sort'))
    {
      $this->getUser()->setAttribute('sort', $this->getRequestParameter('sort'), 'sf_admin/question/sort');
      $this->getUser()->setAttribute('type', $this->getRequestParameter('type', 'asc'), 'sf_admin/question/sort');
    }

    if (!$this->getUser()->getAttribute('sort', null, 'sf_admin/question/sort'))
    {
    }
  }

  protected function addFiltersCriteria($c)
  {
    if (isset($this->filters['department_id_is_empty']))
    {
      $criterion = $c->getNewCriterion(QuestionPeer::DEPARTMENT_ID, '');
      $criterion->addOr($c->getNewCriterion(QuestionPeer::DEPARTMENT_ID, null, Criteria::ISNULL));
      $c->add($criterion);
    }
    else if (isset($this->filters['department_id']) && $this->filters['department_id'] !== '')
    {
      $c->add(QuestionPeer::DEPARTMENT_ID, $this->filters['department_id']);
    }
    if (isset($this->filters['level_is_empty']))
    {
      $criterion = $c->getNewCriterion(QuestionPeer::LEVEL, '');
      $criterion->addOr($c->getNewCriterion(QuestionPeer::LEVEL, null, Criteria::ISNULL));
      $c->add($criterion);
    }
    else if (isset($this->filters['level']) && $this->filters['level'] !== '')
    {
      $c->add(QuestionPeer::LEVEL, $this->filters['level']);
    }
  }

  protected function addSortCriteria($c)
  {
    if ($sort_column = $this->getUser()->getAttribute('sort', null, 'sf_admin/question/sort'))
    {
      $sort_column = QuestionPeer::translateFieldName($sort_column, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
      if ($this->getUser()->getAttribute('type', null, 'sf_admin/question/sort') == 'asc')
      {
        $c->addAscendingOrderByColumn($sort_column);
      }
      else
      {
        $c->addDescendingOrderByColumn($sort_column);
      }
    }
  }

  protected function getLabels()
  {
    return array(
      'question{id}' => 'Id:',
      'question{description}' => 'Question:',
      'question{answer_a}' => 'A:',
      'question{answer_b}' => 'B:',
      'question{answer_c}' => 'C:',
      'question{answer_d}' => 'D:',
      'question{department_id}' => 'Type of Question:',
      'question{level}' => 'Level:',
    );
  }
}
