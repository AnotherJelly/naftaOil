<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("result");
?>
<?
if (sanitizeString($_POST['client-phone-form1']) != null)
{
		
    $arrFields = [
        'PHONE' => sanitizeString($_POST['client-phone-form1'])
    ];
    CModule::IncludeModule("form");
    $FORM_ID = 12;
    $arValues = array (
        "form_text_48" 	=> sanitizeString($_POST['client-phone-form1'])
    );
    CFormResult::Add($FORM_ID, $arValues);

    echo "OK";
}

function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var); 
    return $var;
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>