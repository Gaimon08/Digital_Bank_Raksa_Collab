<?php if ($this->session->userdata('success')) { ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>  
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('success'); ?>
</div>
<?php }?>

<?php if ($this->session->userdata('danger')) { ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>  
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('danger'); ?>
</div>
<?php }?>

