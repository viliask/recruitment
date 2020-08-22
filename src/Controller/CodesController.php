<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Codes Controller
 *
 * @property \App\Model\Table\CodesTable $Codes
 * @method \App\Model\Entity\Code[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $codes = $this->paginate($this->Codes);

        $this->set(compact('codes'));
    }

    /**
     * View method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $code = $this->Codes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('code'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $file = $this->request->data['file']->getStream()->getMetadata('uri');
            if (($handle = fopen($file, "r")) !== FALSE) {
                $zonesCSV = [];
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    for ($c=0; $c < $num; $c++) {
                        array_push($zonesCSV, $data[$c]);

                        $saveMany = [];
                        foreach ($zonesCSV as $zone) {
                            array_push($saveMany, ['name' => $zone]);
                        }

                        if ($this->Codes->save($code)) {
                            $this->Flash->success(__('The postcode has been saved.'));
                        } else {
                            $this->Flash->error(__('The postcode could not be saved. Please, try again later.'));
                        }
                    }
                }
                fclose($handle);
            }

            return $this->redirect(['action' => 'index']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $code = $this->Codes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $code = $this->Codes->patchEntity($code, $this->request->getData());
            if ($this->Codes->save($code)) {
                $this->Flash->success(__('The code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The code could not be saved. Please, try again.'));
        }
        $this->set(compact('code'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $code = $this->Codes->get($id);
        if ($this->Codes->delete($code)) {
            $this->Flash->success(__('The code has been deleted.'));
        } else {
            $this->Flash->error(__('The code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
