{extends file='catalog/_partials/product-prices.tpl'}

{block name='product_without_taxes'}
  {if $product.price}
    <br>
    <p><i style="margin: 0px 10px 0 0" class="fa fa-credit-card"></i><b>1x</b> de <b>{$product.price}</b> no cartão de crédito<br>
    ou em até <b>10x</b> de <b>{{$currency.sign}}{ProductAccess::getValuePrince($product.id_product)}</b> </p>
  {/if}

  {if $priceDisplay == 2}
    <p class="product-without-taxes">{l s='%price% tax excl.' d='Shop.Theme.Catalog' sprintf=['%price%' => $product.price_tax_exc]}</p>
  {/if}
{/block}
