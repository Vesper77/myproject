<div class="container bot-120">
	<div class="text-align-center bot-30 right-10">
	    <h3>Choose a brand</h3>               
	</div>

	
		<div class="row">
			<?php for ($i = 0; $i < count($brand); $i++):?>
				<div class="float-left col-md-2" >
						<a href=<?php echo "/catalog/save-model/".$brand[$i]['id']?>><img class="max-width-100" src =<?php echo $brand[$i]['logo'];?>>
						</a>
				</div>
			<?php endfor;?>
		</div>
	
</div>





