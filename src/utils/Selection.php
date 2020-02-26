<?php


namespace mywishlist\utils;

/**
 * Classe Selection, cette classe permet de stocker toutes les constantes associées au rendu et autres
 * @package mywishlist\utils
 */
class Selection
{
    const ALL_LIST = 'ALL_LIST';
    const TOKEN_LIST_MODIFIABLE = 'TOKEN_LIST_MODIFIABLE';
    const TOKEN_LIST = 'TOKEN_LIST';
    const FORM_CREATE_LIST = 'FORM_CREATE_LIST';
    const FORM_MODIFY_LIST = 'FORM_MODIFY_LIST';

    const ID_ITEM = 'ID_ITEM';
    const FORM_CREATE_ITEM = 'FORM_CREATE_ITEM';
    const FORM_ITEM_RESERVE_FAIL = 'FORM_ITEM_RESERVE_FAIL';
    const FORM_ITEM_RESERVE_SUCCESS = 'FORM_ITEM_RESERVE_SUCCESS';
    const FORM_IMAGE_UPLOAD_FAIL = 'FORM_IMAGE_UPLOAD_FAIL';
    const FORM_IMAGE_UPLOAD_SUCCESS = 'FORM_IMAGE_UPLOAD_SUCCESS';

    const ACCOUNT = 'ACCOUNT';
    const REGISTER_POST_SUCCESS = 'REGISTER_POST_SUCCESS';
    const REGISTER_POST_FAILED = 'REGISTER_POST_FAILED';
    const REGISTER_POST_USER_OR_EMAIL_EXSITE = 'REGISTER_POST_USER_OR_EMAIL_EXSITE';

    const LOGIN_POST_SUCCESS = 'LOGIN_SUCCESS';
    const LOGIN_POST_FAILED = 'LOGIN_POST_FAILED';
    const LOGIN_POST_USERPASS_WRONG = "LOGIN_POST_USERPASS_WRONG";

    const LOGOUT = "LOGOUT";
    const CHANGE_FAILD = "CHANGE_FAILD";
    const CHANGE_BAD_PASSWORD = "CHANGE_BAD_PASSWORD";
    const CHANGE_USER_ERROR = "CHANGE_USER_ERROR";
    const CHANGE_USER = "CHANGE_USER";
    const ACCOUNT_DELETE = "ACCOUNT_DELETE";
    const CHANGE_OK = "CHANGE_OK";
    const CHANGE_EMAIL_ERROR = "CHANGE_EMAIL_ERROR";
    const REGISTER_TERMS_OF_USE_NOT_CHECK = "REGISTER_TERMS_OF_USE_NOT_CHECK";
    const FORM_MODIFY_ITEM_MANAGE = "FORM_MODIFY_ITEM_MANAGE";
    const FORM_MODIFY_ITEM_PART = "FORM_MODIFY_ITEM_PART";
    const LIST_PUBLIC = "LIST_PUBLIC";
}