<h2>Manage Feature</h2>
<style>
    #feature-table {
        background-color: white;
        width: 700px;
         border-collapse: collapse;
        
       // border: solid 1px black;
    }
    #feature-table td {
        border: solid 1px black;
        height: 50px;
    }
    #feature-table thead td {
        text-align: center;
    }
</style>
<form id="active-feature" method="POST">
    <input type="hidden" name="feature" id="feature" />
    <input type="hidden" name="status" id="status" />
</form>
<table id="feature-table" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    <thead>
    <?php $no = 1; ?>
    <?php foreach ($listFeature as $key => $feature) : ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $feature['name']; ?></td>
        <td><?php echo $feature['description']; ?></td>
        <td>
            <?php if ($feature['status'] == "active") : ?>
                <a href="#" class="deactive" data-status="deactive" data-feature="<?php echo $key; ?>" >Deactive</a>
            <?php else: ?>
                <a href="#" class="deactive" data-status="active" data-feature="<?php echo $key; ?>" >Active</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
</table>
<script>
    jQuery('.deactive').click(function() {
        jQuery('#feature').val(jQuery(this).attr('data-feature'));
        jQuery('#status').val(jQuery(this).attr('data-status'));
        jQuery('#active-feature').submit();
    });
</script>