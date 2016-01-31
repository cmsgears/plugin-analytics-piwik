--
-- Main Site
--

SELECT @site := `id` FROM cmg_core_site WHERE slug = 'main';

--
-- Twitter Meta Config Form
--

INSERT INTO `cmg_core_form` (`siteId`,`templateId`,`createdBy`,`modifiedBy`,`name`,`slug`,`type`,`description`,`successMessage`,`captcha`,`visibility`,`active`,`userMail`,`adminMail`,`htmlOptions`,`createdAt`,`modifiedAt`) VALUES
	(@site,NULL,1,1,'Config Piwik','config-piwik','system','Twitter meta configuration form.','All configurations saved successfully.',0,10,1,0,0,NULL,'2014-10-11 14:22:54','2014-10-11 14:22:54');

SELECT @form := `id` FROM cmg_core_form WHERE slug = 'config-twitter-meta';

INSERT INTO `cmg_core_form_field` (`formId`,`name`,`label`,`type`,`compress`,`validators`,`order`,`htmlOptions`,`data`) VALUES 
	(@form,'active','Active',40,0,'required',0,'{\"title\":\"activate or de-activate.\"}',NULL),
	(@form,'page','Page',40,0,'required',0,'{\"title\":\"enable or disabled for all pages.\"}',NULL),
	(@form,'post','Post',40,0,'required',0,'{\"title\":\"enable or disabled for all posts.\"}',NULL),
	(@form,'token','Token',10,0,'required',0,'{\"title\":\"Token\"}',NULL);

--
-- Dumping data for table `cmg_core_model_attribute`
--

INSERT INTO `cmg_core_model_attribute` (`parentId`,`parentType`,`name`,`type`,`valueType`,`value`) VALUES
	(@site,'site','active','piwik','flag','1'),
	(@site,'site','page','piwik','flag','1'),
	(@site,'site','post','piwik','flag','1'),
	(@site,'site','token','piwik','text',NULL);