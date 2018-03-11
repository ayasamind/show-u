<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Statics\UserInfo;
/**
 * Belongings Controller
 *
 *
 * @method \App\Model\Entity\Belonging[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BelongingsController extends AppController
{
    // ヘルパー読み込み
    public $helpers = [
       'ContentsFile.ContentsFile',
    ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $belongings = $this->paginate($this->Belongings);

        $this->set(compact('belongings'));
        $this->set('title_for_layout', '持ち物一覧');
    }

    /**
     * View method
     *
     * @param string|null $id Belonging id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $belonging = $this->Belongings->get($id, [
            'contain' => []
        ]);

        $this->set('belonging', $belonging);
        $this->set('title_for_layout', '持ち物詳細');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $belonging = $this->Belongings->newEntity();
        if ($this->request->is('post')) {
            $belonging = $this->Belongings->patchEntity($belonging, $this->request->getData(), [
                'associate' => 'attachments'
            ]);
            $belonging->user_id = UserInfo::$id;
            // debug($belonging); exit;
            if ($this->Belongings->save($belonging)) {
                $this->Flash->success('持ち物を保存しました');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('持ち物の保存に失敗しました');
        }
        $category = $this->Belongings->Categories->find('list')->toArray();
        $this->set(compact('belonging', 'category'));
        $this->set('title_for_layout', '持ち物登録');
    }

    /**
     * Edit method
     *
     * @param string|null $id Belonging id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $belonging = $this->Belongings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $belonging = $this->Belongings->patchEntity($belonging, $this->request->getData());
            if ($this->Belongings->save($belonging)) {
                $this->Flash->success(__('The belonging has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The belonging could not be saved. Please, try again.'));
        }
        $this->set(compact('belonging'));
        $this->set('title_for_layout', '持ち物編集');
    }

    /**
     * Delete method
     *
     * @param string|null $id Belonging id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $belonging = $this->Belongings->get($id);
        if ($this->Belongings->delete($belonging)) {
            $this->Flash->success(__('The belonging has been deleted.'));
        } else {
            $this->Flash->error(__('The belonging could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
