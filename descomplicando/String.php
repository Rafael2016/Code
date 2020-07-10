<?php
/**
 * @Class Helper String
 */
class HString  {

	public static function removerTodosEspacos($string) {
		return preg_replace('/\s+/', '', $string);
	}
	public static function soNumero($string) {
		return preg_replace("/[^0-9]/", '', $string);
   }

   public static function removerCaracteresEspecias($string){
   		return str_replace('º', '', str_replace('°','',str_replace('/','-',str_replace(')','',str_replace('(', '', $string)))));
   }
