<?php
//contact 1 variable
$name1 = "";
$phone1= "";

//contact 2 variable
$name2 = "";
$phone2= "";

//menu show
while(true){
    echo "=====contact manager====== \n";
    echo "1. Add contact \n";
    echo "2. View contact \n";
    echo "3. Exit \n";

    //user input for menu
    echo "Enter a choice :";
    $choice = trim(fgets(STDIN));
    

    if($choice == 1){
        // ===add contact=====

        //checking the name1 variable is empty or not
        if($name1 == ""){
            echo "please enter a name for : contact1 \n";
            $name1 = fgets(STDIN);
            echo "please enter a phone number for : contact1 \n";
            $phone1 = fgets(STDIN);
        }else if($name2 == ""){
            echo "please enter a name for : contact2 \n";
            $name2 = fgets(STDIN);
            echo "please enter a phone number for : contact1 \n";
            $phone2 = fgets(STDIN); 
        }else{
            echo "You have already added two contact \n";
        }
    }else if($choice == 2){
        // View contact

        echo "\n =====view contact======== \n";
        // check if the variable not empty
        if($name1 != ""){
            echo "contact 1 : $name1 | $phone1 \n";
        }
        if($name2 != ""){
            echo "contact 2 : $name2 | $phone2  \n";
        }
        //check if variable is empty 
        if($name1 == "" && $name2 == ""){
            echo "No contact found \n";
        }
    }else if($choice == 3){
        echo "Goodby ! \n";
          break;
    }else{
         echo "Invalid choice : please try again. \n";
    }

}
