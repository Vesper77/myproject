<div class="container bot-120">
	<div class="text-align-center bot-30 right-10">
	    <h3> Choose a model </h3>             
	</div>
	<!-- <div class="container">
		<div class="row"> -->
		<table border="1" width="100%">
							<?php for ($i = 0; $i < count($model); $i++):?>
							<tr>
									<td class="padding-10">
										<a class="black" href=<?php echo '/catalog/view-car/'.$model[$i]['id']?>>
											<?php echo $model[$i]['name'];?>
										</a>
									</td>
							</tr>
					
				<?php endfor;?>
		</table>
</div>
<!-- 	</div>
</div> -->

 