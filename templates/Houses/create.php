<h1>Create Listing</h1>
<div class="houses form">
    <?= $this->Form->create($house) ?>
    <fieldset>
        <?= $this->Form->control('type', ['label' => 'Type']); ?>
        <?= $this->Form->control('bedrooms', ['label' => 'Bedrooms', 'type' => 'number']); ?>
        <?= $this->Form->control('bathrooms', ['label' => 'Bathrooms', 'type' => 'number', 'skip' => 'any']); ?>
        <?= $this->Form->control('sq_foot', ['label' => 'Square Footage', 'type' => 'number']); ?>
        <?= $this->Form->control('price', ['label' => 'Price', 'type' => 'number']); ?>
    </fieldset>
    <?= $this->Form->button(__('Save House Listing')) ?>
    <?= $this->Form->end() ?>
</div>