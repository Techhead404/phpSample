<h1>Search Houses</h1>

<div class="houses search">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <fieldset>
        <!-- Added 'step' => 'any' for bathrooms due to half baths -->
        <?= $this->Form->control('type', ['label' => 'Type']); ?>
        <?= $this->Form->control('bedrooms', ['label' => 'Bedrooms', 'type' => 'number']); ?>
        <?= $this->Form->control('bathrooms', ['label' => 'Bathrooms', 'type' => 'number', 'step' => 'any']); ?>
        <?= $this->Form->control('sq_foot', ['label' => 'Square Footage', 'type' => 'number']); ?>
        <?= $this->Form->control('price', ['label' => 'Price', 'type' => 'number']); ?>
    </fieldset>
    <?= $this->Form->button(__('search')) ?>
    <?= $this->Form->end() ?>
</div>
<!-- Hides house listing when page loads.-->
<?php if ($hasSearched): ?>
    <h2><?= __('Search Results') ?></h2>

    <table>
        <tr>
            <th>Type</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>sq ft</th>
            <th>Price</th>
        </tr>
        <?php foreach ($houses as $house): ?>
        <tr>
            <td>
                <?= $house->type ?>
            </td>
            <td>
                <?= $house->bedrooms ?>
            </td>
            <td>
                <?= $house->bathrooms ?>
            </td>
            <td>
                <?= $house->sq_foot ?>
            </td>
            <td>
                <?= $house->price ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php elseif ($hasSearched === false): ?>
<?php endif; ?>