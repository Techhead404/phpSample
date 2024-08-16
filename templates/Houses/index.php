<h1>All Houses</h1>
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