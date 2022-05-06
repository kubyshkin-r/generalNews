<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container">

        <section class="news-containers">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item">
                <?if($arItem["PREVIEW_PICTURE"]["SRC"]){?>
                    <img
                        class="news__images"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
                <? }
                else
                {?>
                    <img
                        class="news__images"
                        src="../upload/news/images/base.jpg"
                        alt="base image"
                        title="base image"/>
                   
                <? } ?>
                
                    <div class="news__date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                    <h3 class="news__subtitle"><?echo $arItem["NAME"]?></h3>
                    <?//исправил баг где тег р попадал в р
                    $text =  $arItem["PREVIEW_TEXT"];
                    $text = str_replace('<p>', '', $text); 
                    $text = str_replace('</p>', '', $text);
                     ?>
                    <p class="news__descriptions"><?echo $text;?></p>
                </a>
            <?endforeach;?>
            
        </section>
</div>
