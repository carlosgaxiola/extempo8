<?php $this->load->view("global/header") ?>
<?php $this->load->view("global/navbar") ?>
<?php $this->load->view("global/aside") ?>
<main class="content-wrapper">
	<section class="content" id="tabla">
		<?php $this->load->view("platillos/tablaVista") ?>
	</section>
	<section class="content" id="form" hidden>
		<?php $this->load->view("platillos/formVista") ?>
	</section>
</main>
<?php $this->load->view("global/footer") ?>
<?php $this->load->view("platillos/scriptJS") ?>