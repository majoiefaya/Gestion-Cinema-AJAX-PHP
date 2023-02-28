<?php
    include("ConnexionBaseDeDonnées.php");
    include_once('Personne.Class.php');


    class PersonneAdmin
    {
        public function PersonneLogin($nom, $password)
        {
            global $db;

            $selectFromDb = $db->prepare('SELECT * FROM Personne WHERE Nom=:user_name AND MotDePasse=:pass');

                    $selectFromDb->execute(
                        array(
                            'user_name'=>$nom,
                            'pass'=>$password
                        )
                    );

                    $result = $selectFromDb->fetch();

                    if ($result != null){
                        return $result;
                    }

            return null;
        }

        

        public function AjouterPersonne(Personne $personne)
        {
            global $db;

            $AjouterPersonne=$db->prepare("INSERT INTO Personne(Nom,Prenom,Username,MotDePasse,Telephone)
            VALUES(:name,:prenam,:username,:password,:Tel)");

            $AjouterPersonne->execute
            (
                array
                (
                    'name'=>$personne->getNom(),
                    'prenam'=>$personne->getPrenom(),
                    'username'=>$personne->getUsername(),
                    'password'=>$personne->getPassword(),
                    'Tel'=>$personne->getTelephone(),
                )
            );


            $error=$AjouterPersonne->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;
        }


       
        public function ModifierPersonne(Personne $personne,$id)
        {
            global $db;

            $ModifierPersonne=$db->prepare("UPDATE Personne SET Nom=:name,Prenom=:prenam,Username=:username,MotDePasse=:password,Telephone=:Tel
             WHERE id=:id");
            $ModifierPersonne->execute
            (
       
                array
                (
                    'id'=>$id,
                    'name'=>$personne->getNom(),
                    'prenam'=>$personne->getPrenom(),
                    'username'=>$personne->getUsername(),
                    'password'=>$personne->getPassword(),
                    'Tel'=>$personne->getTelephone(),
                )
                );

            $error=$ModifierPersonne->errorInfo();

            if(is_null($error[1]))
            {
                return true;

            }
            return false;
        }





        public function SupprimerPersonne($id)
        {
            global $db;

            
            $SupprimerPersonne=$db->prepare('DELETE FROM Personne WHERE id=:Personne_id');
            
                $SupprimerPersonne->execute(array
                (
                    'Personne_id'=>$id
                )
            );

            $error=$SupprimerPersonne->errorInfo();

            if(is_null($error[1]))
            {
                return true;
            }
            return false;

            $SupprimerFilmsPersonne=$db->prepare('DELETE FROM Film WHERE id_personne=:id');

            $SupprimerFilmsPersonne->execute(array
            (
                'id'=>$id
            )
            );

        }

        
        public function InfosPersonne($id)
        {
            global $id;
            global $db;

            $GetInfosPersonne=$db->prepare("SELECT * FROM Personne WHERE id=:id_personne");

            $GetInfosPersonne->execute(array
            (
                'id_personne'=>$id
            )
            );
        
            $infos=$GetInfosPersonne->fetch();

        }

    }
?>