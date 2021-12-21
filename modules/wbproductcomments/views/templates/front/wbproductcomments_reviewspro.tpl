{if $averageTotal > 0}

<div class="d-inline-block avg-rate bg-re{$averageTotal}">
	<div class="d-inline-block">
		{if $averageTotal > 0}
			<span class="avgt d-inline-block rate-tot">{$averageTotal}</span>
		{/if}
	</div>
	<div class="d-inline-block"><i class="fa fa-star"></i></div>
</div>
<span class="retesp">|</span>
<div class="d-inline-block rate-avg">
	<ul>
		{* {$total_review} *}
		{foreach from=$review_user item=review}
		    <li>
		    	<div class="d-inline-block">
					<span class="num d-inline-block">{$review@key}</span><span class="rate d-inline-block"><i class="fa fa-star"></i></span>
				</div>
		    	<div class="d-inline-block total-avg">
					<div class="star-main d-inline-block">
						<div class="starm bar{$review@key} color-{$review@key}" style="width:{(($review * 100)/$total_review)|round:0}%"></div>
					</div>
				</div>
				<div class="d-inline-block">
					<div class="totl">	
						{$review}
					</div>
				</div>
			</li>
		{/foreach}
	</ul>
</div>

{/if}
