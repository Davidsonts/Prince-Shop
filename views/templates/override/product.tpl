{extends file='catalog/product.tpl'}

{block name='product_prices'} 
	{include file="module:price_shop/views/templates/override/catalog/_partials/product-prices.tpl"}

    <style>
		/* Esconde erro quantidade */
		#add-to-cart-or-refresh  div.product-add-to-cart  div.alert.alert-danger.ajax-error{
			display:none;
		}
    </style>
{/block}