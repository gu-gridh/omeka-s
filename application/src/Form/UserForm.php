<?php
namespace Omeka\Form;

class UserForm extends AbstractForm
{
    protected $options = array('include_role' => false);

    public function buildForm()
    {
        $translator = $this->getTranslator();

        $this->add(array(
            'name' => 'o:name',
            'type' => 'Text',
            'options' => array(
                'label' => $translator->translate('Name'),
            ),
            'attributes' => array(
                'id' => 'name',
                'required' => true,
            ),
        ));
        $this->add(array(
            'name' => 'o:email',
            'type' => 'Email',
            'options' => array(
                'label' => $translator->translate('Email'),
            ),
            'attributes' => array(
                'id' => 'email',
                'required' => true,
            ),
        ));

        $roles = $this->getServiceLocator()->get('Omeka\Acl')->getRoleLabels();
        if ($this->getOption('include_role')) {
            $this->add(array(
                'name' => 'o:role',
                'type' => 'select',
                'options' => array(
                    'label' => $translator->translate('Role'),
                    'value_options' => $roles,
                ),
                'attributes' => array(
                    'id' => 'role',
                    'required' => true,
                ),
            ));
        }
    }
}
