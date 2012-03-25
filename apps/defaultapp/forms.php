<?php 
require_once('pjango/forms.php');

class ContactUsForm extends Form {
    protected function define_fields(){
        $this->id = new HiddenField();

        $this->name = new TextField(pjango_gettext("Name"), 45, 255, array('RequiredValidator'), array('class'=>'required'));
        $this->email = new TextField(pjango_gettext("E-mail"), 45, 255, array('RequiredValidator'), array('class'=>'required email'));
        $this->phone = new TextField(pjango_gettext("Phone"), 45, 255);
        $this->message = new LargeTextField(pjango_gettext("Message"), 5, 70);
    }
}
