<?php
#parse("PHP File Header.php")

class ${NAME} extends Form
{
    /**
     * Create a new form, with the given fields and action buttons.
     * Fallback to default fields and action buttons if none are supplied.
     *
     * @param Controller ${DS}controller
     * @param String     ${DS}name
     * @param FieldList  ${DS}fields
     * @param FieldList  ${DS}actions
     * @param Validator  ${DS}validator
     */
    public function __construct(${DS}controller, ${DS}name, FieldList ${DS}fields = null, FieldList ${DS}actions = null, ${DS}validator = null)
    {
        if (!${DS}fields || !${DS}fields instanceof FieldList) {
            ${DS}fields = ${DS}this->getDefaultFields();
        }
        if (!${DS}actions || !${DS}actions instanceof FieldList) {
            ${DS}actions = ${DS}this->getDefaultActions();
        }
        if (!${DS}validator || !${DS}validator instanceof Validator) {
            ${DS}validator = ${DS}this->getDefaultValidator();
        }

        parent::__construct(${DS}controller, ${DS}name, ${DS}fields, ${DS}actions, ${DS}validator);
    }

    /**
     * Create the default fields.
     *
     * @return FieldList
     */
    public function getDefaultFields()
    {
        ${DS}fields = FieldList::create();

        // TODO: Create FormField for each field and add to FieldList

        return ${DS}fields;
    }

    /**
     * Create the default actions.
     *
     * @return FieldList
     */
    public function getDefaultActions()
    {
        ${DS}actions = FieldList::create();

        // TODO: Create FormAction for submit action and add to FieldList

        return ${DS}actions;
    }

    /**
     * Create the default validator.
     *
     * @return Validator
     */
    public function getDefaultValidator()
    {
        return null; // TODO: Create and configure Validator (suggest sheadawson/silverstripe-zenvalidator)
    }
}