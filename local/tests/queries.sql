ALTER TABLE `users` ADD `status` TINYINT NOT NULL DEFAULT '0' COMMENT '0 : pending, 1 : activated, 2 : suspended, 3 : trasheds' AFTER `password`;

ALTER TABLE addresses DROP FOREIGN KEY fk_country;

/* 5th April */
ALTER TABLE `course_application` CHANGE `tution_fee` `tuition_fee` FLOAT NULL DEFAULT NULL;

/* 7th April */
ALTER TABLE `course_fees` CHANGE `agency_institute_courses_id` `course_id` INT(11) NOT NULL;

ALTER TABLE `fees` CHANGE `total_tution_fee` `total_tuition_fee` FLOAT NULL DEFAULT NULL;

/* 11th April */
ALTER TABLE `broad_field` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `broad_field`(`name`, `description`) VALUES ('Natural and Physical Sciences', 'Natural and Physical Sciences'),
('Information Technology', 'Information Technology'),
('Engineering and Related Technologies', 'Engineering and Related Technologies'),
('Architecture and Building', 'Architecture and Building'),
('Agriculture, Environmental and Related Studies', 'Agriculture, Environmental and Related Studies'),
('Health', 'Health'),
('Education', 'Education'),
('Management and Commerce', 'Management and Commerce'),
('Society and Culture', 'Society and Culture'),
('Creative Arts', 'Creative Arts'),
('Food, Hospitality and Personal Services', 'Food, Hospitality and Personal Services'),
('Mixed Field Programmes', 'Mixed Field Programmes');

ALTER TABLE `narrow_field` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES ('Natural and Physical Sciences', 'Natural and Physical Sciences', 1),
('Mathematical Sciences', 'Mathematical Sciences', 1),
('Physics and Astronomy', 'Physics and Astronomy', 1),
('Chemical Sciences', 'Chemical Sciences', 1),
('Earth Sciences', 'Earth Sciences', 1),
('Biological Sciences', 'Biological Sciences', 1),
('Other Natural and Physical Sciences', 'Other Natural and Physical Sciences', 1);

INSERT INTO `broad_field`(`name`, `description`, `broad_field_id`) VALUES
('Information Technology', 'Information Technology', 2),
('Computer Science', 'Computer Science', 2),
('Information Systems', 'Information Systems', 2),
('Other Information Technology', 'Other Information Technology', 2);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Engineering and Related Technologies', 'Engineering and Related Technologies', 3),
('Manufacturing Engineering and Technology', 'Manufacturing Engineering and Technology', 3),
('Process and Resources Engineering', 'Process and Resources Engineering', 3),
('Automotive Engineering and Technology', 'Automotive Engineering and Technology', 3),
('Mechanical and Industrial Engineering and Technology', 'Mechanical and Industrial Engineering and Technology', 3),
('Civil Engineering', 'Civil Engineering', 3),
('Geomatic Engineering', 'Geomatic Engineering', 3),
('Electrical and Electronic Engineering and Technology', 'Electrical and Electronic Engineering and Technology', 3),
('Aerospace Engineering and Technology', 'Aerospace Engineering and Technology', 3),
('Maritime Engineering and Technology', 'Maritime Engineering and Technology', 3),
('Other Engineering and Related Technologies', 'Other Engineering and Related Technologies', 3);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Architecture and Building', 'Architecture and Building', 4),
('Architecture and Urban Environment', 'Architecture and Urban Environment', 4),
('Building', 'Building', 4);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Agriculture', 'Agriculture', 5),
('Horticulture and Viticulture', 'Horticulture and Viticulture', 5),
('Forestry Studies', 'Forestry Studies', 5),
('Fisheries Studies', 'Fisheries Studies', 5),
('Environmental Studies', 'Environmental Studies', 5),
('Other Agriculture, Environmental and Related Studies', 'Other Agriculture, Environmental and Related Studies', 5);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Health', 'Health', 6),
('Medical Studies', 'Medical Studies', 6),
('Nursing', 'Nursing', 6),
('Pharmacy', 'Pharmacy', 6),
('Dental Studies', 'Dental Studies', 6),
('Optical Science', 'Optical Science', 6),
('Veterinary Studies', 'Veterinary Studies', 6),
('Public Health', 'Public Health', 6),
('Radiography', 'Radiography', 6),
('Rehabilitation Therapies', 'Rehabilitation Therapies', 6),
('Complementary Therapies', 'Complementary Therapies', 6),
('Other Health', 'Other Health', 6);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Education', 'Education', 7),
('Teacher Education', 'Teacher Education', 7),
('Curriculum and Education Studies', 'Curriculum and Education Studies', 7),
('Other Education', 'Other Education', 7);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Management and Commerce', 'Management and Commerce', 8),
('Accounting', 'Accounting', 8),
('Business and Management', 'Business and Management', 8),
('Sales and Marketing', 'Sales and Marketing', 8),
('Tourism', 'Tourism', 8),
('Office Studies', 'Office Studies', 8),
('Banking, Finance and Related Fields', 'Banking, Finance and Related Fields', 8),
('Other Management and Commerce', 'Other Management and Commerce', 8);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Society and Culture', 'Society and Culture', 9),
('Political Science and Policy Studies ', 'Political Science and Policy Studies ', 9),
('Studies in Human Society', 'Studies in Human Society', 9),
('Human Welfare Studies and Services', 'Human Welfare Studies and Services', 9),
('Behavioural Science', 'Behavioural Science', 9),
('Law', 'Law', 9),
('Justice and Law Enforcement', 'Justice and Law Enforcement', 9),
('Librarianship, Information Management and Curatorial Studies', 'Librarianship, Information Management and Curatorial Studies', 9),
('Language and Literature', 'Language and Literature', 9),
('Philosophy and Religious Studies', 'Philosophy and Religious Studies', 9),
('Economics and Econometrics', 'Economics and Econometrics', 9),
('Sport and Recreation', 'Sport and Recreation', 9),
('Other Society and Culture', 'Other Society and Culture', 9);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Creative Arts', 'Creative Arts', 10),
('Performing Arts ', 'Performing Arts ', 10),
('Visual Arts and Crafts', 'Visual Arts and Crafts', 10),
('Graphic and Design Studies', 'Graphic and Design Studies', 10),
('Communication and Media Studies', 'Communication and Media Studies', 10),
('Other Creative Arts', 'Other Creative Arts', 10);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('Food and Hospitality', 'Food and Hospitality', 11),
('Personal Services', 'Personal Services', 11);

INSERT INTO `narrow_field`(`name`, `description`, `broad_field_id`) VALUES
('General Education Programmes', 'General Education Programmes', 12),
('Social Skills Programmes', 'Social Skills Programmes', 12),
('Employment Skills Programmes', 'Employment Skills Programmes', 12),
('Other Mixed Field Programmes', 'Other Mixed Field Programmes', 12);

/* 16th May */
ALTER TABLE agency_agents DROP FOREIGN KEY fk_agency_agents_agency1;

ALTER TABLE `agency_agents` DROP `agency_id`;

/*rename agency agents to agents*/

ALTER TABLE `agents` CHANGE `agency_agent_id` `agent_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE agents DROP FOREIGN KEY fk_agency_agents_companies1;

ALTER TABLE `agents` DROP `company_id`;

/* new table institute addresses*/

/* new table institute_phones*/

ALTER TABLE `courses` CHANGE `level` `level` VARCHAR(55) NULL DEFAULT NULL COMMENT 'Diploma, Bachelor etc..';

ALTER TABLE `clients` CHANGE `referred_by` `added_by` INT NULL;

ALTER TABLE `payment_invoice_breakdowns`
  DROP `amount`,
  DROP `description`;

ALTER TABLE `invoices` DROP `course_application_id`;

/* June 2 */
ALTER TABLE `invoices` CHANGE `student_invoice_id` `invoice_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `invoices` CHANGE `final_amount` `invoice_amount` FLOAT NULL DEFAULT NULL;

ALTER TABLE `invoices` ADD `due_date` DATE NOT NULL AFTER `invoice_date`;

/* June 6 change from here */
ALTER TABLE `student_application_payments` CHANGE `student_payments_id` `student_payments_id` INT(11) NOT NULL AUTO_INCREMENT;

/* new sub agent payment table */
/* new sub agent invoice table */

ALTER TABLE `invoices` CHANGE `invoice_id` `invoice_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `payment_invoice_breakdowns` CHANGE `payment_invoice_breakdown_id` `payment_invoice_breakdown_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users` ADD `role` INT NOT NULL AFTER `is_system_admin`;

ALTER TABLE `users` CHANGE `user_id` `user_id` INT(11) NOT NULL AUTO_INCREMENT;

/* 13 June */
ALTER TABLE `persons` CHANGE `person_id` `person_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `person_addresses` CHANGE `person_address_id` `person_address_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT ' ';

ALTER TABLE `phones` CHANGE `phone_id` `phone_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `person_phones` CHANGE `person_phone_id` `person_phone_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `institutes` CHANGE `institution_id` `institution_id` INT(11) NOT NULL AUTO_INCREMENT;

/* 15th June Jenish */
-- Table structure for table `ci_other_commissions`
--

CREATE TABLE `ci_other_commissions` (
  `other_commission_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `gst` float NOT NULL,
  `description` varchar(155) NOT NULL,
  `college_invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_tuition_commissions`
--

CREATE TABLE `ci_tuition_commissions` (
  `tuition_commission_id` int(11) NOT NULL,
  `tuition_fee` float NOT NULL,
  `enrollment_fee` float NOT NULL,
  `material_fee` float NOT NULL,
  `coe_fee` float NOT NULL,
  `other_fee` float NOT NULL,
  `sub_total` float NOT NULL,
  `description` varchar(155) NOT NULL,
  `commission_percent` float NOT NULL,
  `commission_amount` float NOT NULL,
  `commission_gst` float NOT NULL,
  `college_invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

DROP TABLE `college_invoices`;
--
-- Table structure for table `college_invoices`
--

CREATE TABLE `college_invoices` (
  `college_invoice_id` int(11) NOT NULL,
  `course_application_id` int(11) NOT NULL,
  `total_commission` float DEFAULT NULL,
  `payable_to_college` float DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `installment_no` varchar(45) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_invoices`
--

INSERT INTO `college_invoices` (`college_invoice_id`, `course_application_id`, `total_commission`, `payable_to_college`, `due_date`, `installment_no`, `invoice_date`, `created_at`, `updated_at`) VALUES
(1, 1, 200, 500, '2018-06-06 00:00:00', '1', '2018-05-06 00:00:00', '2016-06-02 23:22:09', '2016-06-02 23:22:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_other_commissions`
--
ALTER TABLE `ci_other_commissions`
  ADD PRIMARY KEY (`other_commission_id`),
  ADD KEY `college_invoice_id` (`college_invoice_id`);

--
-- Indexes for table `ci_tuition_commissions`
--
ALTER TABLE `ci_tuition_commissions`
  ADD PRIMARY KEY (`tuition_commission_id`),
  ADD KEY `college_invoice_id` (`college_invoice_id`);

--
-- Indexes for table `college_invoices`
--
ALTER TABLE `college_invoices`
  ADD PRIMARY KEY (`college_invoice_id`),
  ADD KEY `course_application_id_idx` (`course_application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_other_commissions`
--
ALTER TABLE `ci_other_commissions`
  MODIFY `other_commission_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ci_tuition_commissions`
--
ALTER TABLE `ci_tuition_commissions`
  MODIFY `tuition_commission_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `college_invoices`
--
ALTER TABLE `college_invoices`
  MODIFY `college_invoice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ci_other_commissions`
--
ALTER TABLE `ci_other_commissions`
  ADD CONSTRAINT `ci_other_commissions_ibfk_1` FOREIGN KEY (`college_invoice_id`) REFERENCES `college_invoices` (`college_invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ci_tuition_commissions`
--
ALTER TABLE `ci_tuition_commissions`
  ADD CONSTRAINT `ci_tuition_commissions_ibfk_1` FOREIGN KEY (`college_invoice_id`) REFERENCES `college_invoices` (`college_invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `college_invoices` ADD `total_gst` DOUBLE(11,2) NOT NULL AFTER `total_commission`;

/* 20th June */
ALTER TABLE `institute_courses` CHANGE `institute_course_id` `institute_course_id` INT(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `fees` CHANGE `fee_id` `fee_id` INT(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `course_fees` CHANGE `course_fee_id` `course_fee_id` INT(11) NOT NULL AUTO_INCREMENT;

/* 21st June */
ALTER TABLE `status` CHANGE `status_id` `status_id` INT(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `condat_tenant`.`status` (`name`, `description`) VALUES ('Enquiry', 'Enquiry'), ('Offer Letter Processing', 'Offer Letter Processing'), ('Offer Letter Issued', 'Offer Letter Issued'), ('COE Processing', 'COE Processing'), ('COE Issued', 'COE Issued'), ('Enrolled', 'Enrolled'), ('Completed', 'Completed'), ('Cancelled', 'Cancelled');

ALTER TABLE `agents` ADD `added_by` INT NOT NULL AFTER `company_id`, ADD `email` VARCHAR(55) NOT NULL AFTER `added_by`;