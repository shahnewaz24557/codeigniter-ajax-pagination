<div>
    <div id="pagination_link">
        <?php echo $pagination_link; ?>
    </div>
    <div id="country_table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="15%">#SL</th>
                    <th width="35%">Country Code</th>
                    <th width="45%">Country Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($countries as $row) { ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->country_code; ?></td>
                    <td><?php echo $row->country_name; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
