const form = document.getElementById('form');
const family_name = document.getElementById('family_name');
const last_name = document.getElementById('last_name');
const family_name_kana= document.getElementById('family_name_kana');
const last_name_kana= document.getElementById('last_name_kana');
const mail= document.getElementById('mail');
const password= document.getElementById('password');
const postal_code= document.getElementById('postal_code');
const prefecture= document.getElementById('prefecture');
const address_1= document.getElementById('address_1');
const address_2= document.getElementById('address_2');
const button=document.getElementById('button')

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const p =formControl.querySelector('p');
    p.innerText=message;
}

function showSuccess(input){
    formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isName(name){
    return /^[\u4E00-\u9FA0\u3040-\u309F]+$/.test(name);
}

function isName_kana(name_kana){
    return /^[\u30A0-\u30FF\uFF65-\uFF9F]+$/.test(name_kana);
}

function ismail(mail){
    return /^[0-9A-Za-z@\-.]+$/.test(mail);
}

function ispass(pass){
    return /^[0-9a-zA-Z]+$/.test(pass);
}

function iscode(code){
    return /^[0-9]+$/.test(code);
}

function isaddress(address){
    return /^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠０-９0-9\s \-|ー]+$/.test(address);
}

document.addEventListener('DOMContentLoaded', function(){
    button.addEventListener('click', function(e){
        
        if(family_name.value === ''){
            showError(family_name,'名前（姓）が未入力です。');
            e.preventDefault();
        }else if(!isName(family_name.value)){
            showError(family_name,'漢字かひらがなで入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(family_name)
        }
        
        if(last_name.value === ''){
            showError(last_name,'名前（名）が未入力です。');
            e.preventDefault();
        }else if(!isName(last_name.value)){
            showError(last_name,'漢字かひらがなで入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(last_name)
        }
    
        if(family_name_kana.value === ''){
            showError(family_name_kana,'カナ（姓）が未入力です。');
            e.preventDefault();
        }else if(!isName_kana(family_name_kana.value)){
            showError(family_name_kana,'カタカナで入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(family_name_kana)
        }
        
        if(last_name_kana.value === ''){
            showError(last_name_kana,'カナ（名）が未入力です。');
            e.preventDefault();
        }else if(!isName_kana(last_name_kana.value)){
            showError(last_name_kana,'カタカナで入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(last_name_kana)
        }
        
        if(mail.value === ''){
            showError(mail,'メールアドレスが未入力です。');
            e.preventDefault();
        }else if(!ismail(mail.value)){
            showError(mail,'正しいメールアドレスを入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(mail)
        }
        
        if(password.value === ''){
            showError(password,'パスワードが未入力です。');
            e.preventDefault();
        }else if(!ispass(password.value)){
            showError(password,'半角英数字で入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(password)
        }
        
        if(postal_code.value === ''){
            showError(postal_code,'郵便番号が未入力です。');
            e.preventDefault();
        }else if(!iscode(postal_code.value)){
            showError(postal_code,'半角数字で入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(postal_code)
        }
        
        if(prefecture.value === ''){
            showError(prefecture,'住所（都道府県）が未入力です。');
            e.preventDefault();
        }else{
            showSuccess(prefecture)
        }
        
        if(address_1.value === ''){
            showError(address_1,'住所（市区町村）が未入力です。');
            e.preventDefault();
        }else if(!isaddress(address_1.value)){
            showError(address_1,'ひらがな、漢字、数字、カタカナ、記号（ハイフンとスペース）で入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(address_1)
        }
        
        if(address_2.value === ''){
            showError(address_2,'住所（番地）が未入力です。');
            e.preventDefault();
        }else if(!isaddress(address_2.value)){
            showError(address_2,'ひらがな、漢字、数字、カタカナ、記号（ハイフンとスペース）で入力して下さい。');
            e.preventDefault();
        }else{
            showSuccess(address_2)
        }
    });
});