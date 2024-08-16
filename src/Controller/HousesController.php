<?php
    namespace App\Controller;

    class HousesController extends AppController
    {
        public function index(){
            $houses = $this->paginate($this->Houses);
            $this->set(compact('houses'));
        }
    
        public function search()
        {
            $type = $this->request->getQuery('type');
            $bedroom = $this->request->getQuery('bedrooms');
            $bathroom = $this->request->getQuery('bathrooms');
            $sq_foot = $this->request->getQuery('sq_foot');
            $price = $this->request->getQuery('price');
            
            $houses = [];
            $hasSearched = false;

        //100% sure there is a better way to do this, maybe is isset or something. 
            if ($type || $bedroom || $bathroom || $sq_foot || $price) {
                $hasSearched = true;

                $conditions = [];
                if (!empty($type)) {
                    $conditions['type LIKE'] = '%' . $type . '%';
                }
                if (!empty($bedroom)) {
                    $conditions['bedrooms ='] = $bedroom;
                }
                if (!empty($bathroom)) {
                    $conditions['bathrooms ='] = $bathroom;
                }
                if (!empty($sq_foot)) {
                    $conditions['sq_foot ='] = $sq_foot;
                }
                if (!empty($price)) {
                    $conditions['price ='] = $price;
                }
        
                $houses = $this->Houses->find('all', [
                    'conditions' => $conditions
                ]);
                $houses = $this->paginate($houses);
            }
            $this->set(compact('houses', 'hasSearched'));
        }

        public function create()
        {
            $house = $this->Houses->newEmptyEntity();
            if ($this->request->is('post')) {
                $house = $this->Houses->patchEntity($house, $this->request->getData());
                if ($this->Houses->save($house)) {
                    $this->Flash->success(__('The house listing has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add the house listing.'));
            }
            $this->set('house', $house);
        }
           
    }
?>