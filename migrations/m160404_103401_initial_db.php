<?php

use yii\mongodb\Migration;
use app\models\User;

class m160404_103401_initial_db extends Migration
{
    public function up()
    {
        // create collection2
        $this->createCollection('User');
        $this->createCollection('Customer');
        $this->createCollection('AuthAssignment');
        $this->createCollection('AuthItem');
        $this->createCollection('AuthItemChild');
        $this->createCollection('AuthRule');

        //$this->createIndex('AuthAssignment','user_id');
        //$this->createIndex('AuthItem','name');
        //$this->createIndex('AuthItemChild',['parent','child']);
        
        // add data initial
        $admin = new User();
        $admin->username = 'admin';
        $admin->email = 'admin@email.com';
        $admin->setPassword('admin123');
        $admin->generateAuthKey();
        
        $admin->save();

        $user = new User();
        $user->username = 'izhur';
        $user->email = 'izhur2001@yahoo.com';
        $user->setPassword('izhur');
        $user->generateAuthKey();
        $user->save();
        
        $this->insert('Customer',['name'=>'Johan','email'=>'johan@yahoo.com','address'=>'Jl Ganesha 10 Bandung 40132']);
        $this->insert('Customer',['name'=>'Agung','email'=>'agung@yahoo.com','address'=>'Jl Dago Bengkok no 11, Bandung']);
        $this->insert('Customer',['name'=>'Nasir','email'=>'nasir@yahoo.com','address'=>'Jl Teuku Umar no 13, Bandung 40132']);
        $this->insert('Customer',['name'=>'Eko','email'=>'eko@yahoo.com','address'=>'Jl Imam Bonjol no 4, Bandung']);

        $this->insert('AuthItem',[
                "_id"=>"57020c58b16fb68d14ee6695",
                "name"=>"admin",
                "type"=>1,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020c6cb16fb68d14aad515",
                "name"=>"user",
                "type"=>1,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020e16b16fb68d14bfeddc",
                "name"=>"/admin/*",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020e1eb16fb68d14482b74",
                "name"=>"/user/*",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020e4bb16fb68d14a45305",
                "name"=>"/customer/*",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020e57b16fb68d144cdec7",
                "name"=>"/site/*",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57020ee6b16fb68d14be370a",
                "name"=>"permission_admin",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        $this->insert('AuthItem',[
                "_id"=>"57023d9cb16fb68d14cd744b",
                "name"=>"permission_user",
                "type"=>2,
                "description"=>null,
                "rule_name"=>null,
                "data"=>null,
                "created_at"=>time(),
                "updated_at"=>time()
        ]);
        
        $this->insert('AuthItemChild',['parent'=>'permission_admin','child'=>'/admin/*']);
        $this->insert('AuthItemChild',['parent'=>'permission_admin','child'=>'/user/*']);
        $this->insert('AuthItemChild',['parent'=>'permission_admin','child'=>'/customer/*']);
        $this->insert('AuthItemChild',['parent'=>'permission_admin','child'=>'/site/*']);
        $this->insert('AuthItemChild',['parent'=>'admin','child'=>'permission_admin']);
        $this->insert('AuthItemChild',['parent'=>'admin','child'=>'user']);
        $this->insert('AuthItemChild',['parent'=>'permission_user','child'=>'/customer/*']);
        $this->insert('AuthItemChild',['parent'=>'permission_user','child'=>'/site/*']);
        $this->insert('AuthItemChild',['parent'=>'user','child'=>'permission_user']);

        $this->insert('AuthAssignment',['user_id'=>(string)$admin->getId(),'item_name'=>'admin','created_at'=>time()]);
        $this->insert('AuthAssignment',['user_id'=>(string)$user->getId(),'item_name'=>'user','created_at'=>time()]);
    }

    public function down()
    {
        echo "m160404_103401_initial_db cannot be reverted.\n";

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
