<?php
/*!
 *  Bayrell Runtime Library
 *
 *  (c) Copyright 2018 "Ildar Bikmamatov" <support@bayrell.org>
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      https://www.bayrell.org/licenses/APACHE-LICENSE-2.0.html
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
namespace RuntimeUI;
use Runtime\rs;
use Runtime\rtl;
use Runtime\Map;
use Runtime\Vector;
use Runtime\Dict;
use Runtime\Collection;
use Runtime\IntrospectionInfo;
use Runtime\UIStruct;
use Runtime\Interfaces\ContextInterface;
use Runtime\Interfaces\ModuleDescriptionInterface;
use RuntimeUI\Drivers\CssDriver;
use RuntimeUI\Drivers\WebDriver;
use RuntimeUI\Interfaces\FrontendInterface;
class ModuleDescription implements ModuleDescriptionInterface, FrontendInterface{
	/**
	 * Returns module name
	 * @return string
	 */
	static function getName(){
		return "RuntimeUI";
	}
	/**
	 * Returns module name
	 * @return string
	 */
	static function getModuleVersion(){
		return "0.7.0";
	}
	/**
	 * Init context
	 * @param ContextInterface context
	 */
	static function initContext($context){
	}
	/**
	 * Called then module registed in context
	 * @param ContextInterface context
	 */
	static function onRegister($context){
		/* Register Drivers */
		/*context.registerDriver("driver.web.core", new WebDriver( context ));*/
	}
	/**
	 * Returns required modules
	 * @return Map<string, string>
	 */
	static function getRequiredModules($context){
		return (new Map())->set("Runtime", ">=0.3");
	}
	/**
	 * Called then context read config
	 * @param ContextInterface context
	 * @param Map<mixed> config
	 */
	static function onReadConfig($context, $config){
	}
	/* ======================= Class Init Functions ======================= */
	public function getClassName(){return "RuntimeUI.ModuleDescription";}
	public static function getCurrentClassName(){return "RuntimeUI.ModuleDescription";}
	public static function getParentClassName(){return "";}
}