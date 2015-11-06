-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 12:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceksaham`
--

-- --------------------------------------------------------

--
-- Table structure for table `emiten`
--

CREATE TABLE IF NOT EXISTS `emiten` (
  `id` varchar(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `market_cap` varchar(30) DEFAULT NULL,
  `stock_price` varchar(30) DEFAULT NULL,
  `r2006` varchar(4) DEFAULT NULL,
  `r2007` varchar(4) DEFAULT NULL,
  `r2008` varchar(4) DEFAULT NULL,
  `r2009` varchar(4) DEFAULT NULL,
  `r2010` varchar(4) DEFAULT NULL,
  `r2011` varchar(4) DEFAULT NULL,
  `r2012` varchar(4) DEFAULT NULL,
  `r2013` varchar(4) DEFAULT NULL,
  `r2014` varchar(4) DEFAULT NULL,
  `r2015` varchar(4) DEFAULT NULL,
  `per` varchar(30) DEFAULT NULL,
  `pbv` varchar(30) DEFAULT NULL,
  `peg` varchar(30) DEFAULT NULL,
  `valuation` varchar(30) DEFAULT NULL,
  `close` varchar(30) DEFAULT NULL,
  `open` varchar(30) DEFAULT NULL,
  `high` varchar(30) DEFAULT NULL,
  `low` varchar(30) DEFAULT NULL,
  `bid` varchar(30) DEFAULT NULL,
  `offer` varchar(30) DEFAULT NULL,
  `prev_close` varchar(30) DEFAULT NULL,
  `beta` varchar(30) DEFAULT NULL,
  `div_yield` varchar(30) DEFAULT NULL,
  `avg_vol` varchar(30) DEFAULT NULL,
  `shares_outstanding` varchar(30) DEFAULT NULL,
  `free_float` varchar(30) DEFAULT NULL,
  `free_floatp` varchar(30) DEFAULT NULL,
  `net_profit_margin` varchar(30) DEFAULT NULL,
  `eps_growth` varchar(30) DEFAULT NULL,
  `cfps` varchar(30) DEFAULT NULL,
  `bvps` varchar(30) DEFAULT NULL,
  `roa` varchar(30) DEFAULT NULL,
  `roe` varchar(30) DEFAULT NULL,
  `der` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financial_statement`
--

CREATE TABLE IF NOT EXISTS `financial_statement` (
  `emiten_code` varchar(4) NOT NULL,
  `period` varchar(30) NOT NULL,
  `cash_and_sti` varchar(30) DEFAULT NULL,
  `account_receivable` varchar(30) DEFAULT NULL,
  `inventory` varchar(30) DEFAULT NULL,
  `prepaid_expenses` varchar(30) DEFAULT NULL,
  `other_current_assets` varchar(30) DEFAULT NULL,
  `total_current_assets` varchar(30) DEFAULT NULL,
  `property_plant_equipment` varchar(30) DEFAULT NULL,
  `goodwill` varchar(30) DEFAULT NULL,
  `intangibles` varchar(30) DEFAULT NULL,
  `long_term_investments` varchar(30) DEFAULT NULL,
  `note_receivable` varchar(30) DEFAULT NULL,
  `other_lta` varchar(30) DEFAULT NULL,
  `total_assets` varchar(30) DEFAULT NULL,
  `account_payable` varchar(30) DEFAULT NULL,
  `accrued_expenses` varchar(30) DEFAULT NULL,
  `notes_payable` varchar(30) DEFAULT NULL,
  `current_portion_ltd` varchar(30) DEFAULT NULL,
  `other_current_liabilities` varchar(30) DEFAULT NULL,
  `total_current_liabilities` varchar(30) DEFAULT NULL,
  `long_term_debt` varchar(30) DEFAULT NULL,
  `total_debt` varchar(30) DEFAULT NULL,
  `deferred_income_tax` varchar(30) DEFAULT NULL,
  `minority_interest` varchar(30) DEFAULT NULL,
  `other_liabilities` varchar(30) DEFAULT NULL,
  `total_liabilities` varchar(30) DEFAULT NULL,
  `common_stocks` varchar(30) DEFAULT NULL,
  `add_paidin_capital` varchar(30) DEFAULT NULL,
  `retained_earnings` varchar(30) DEFAULT NULL,
  `treasury_stock` varchar(30) DEFAULT NULL,
  `unrealized_gain` varchar(30) DEFAULT NULL,
  `other_equity` varchar(30) DEFAULT NULL,
  `total_equity` varchar(30) DEFAULT NULL,
  `common_shares_outstanding` varchar(30) DEFAULT NULL,
  `treasury_shares` varchar(30) DEFAULT NULL,
  `bvps` varchar(30) DEFAULT NULL,
  `net_revenue` varchar(30) DEFAULT NULL,
  `cost_of_revenue` varchar(30) DEFAULT NULL,
  `gross_profit` varchar(30) DEFAULT NULL,
  `selling_general_adm_expenses` varchar(30) DEFAULT NULL,
  `depreciation_amortization` varchar(30) DEFAULT NULL,
  `unusual_expense` varchar(30) DEFAULT NULL,
  `other_operating_expenses` varchar(30) DEFAULT NULL,
  `total_operating_expenses` varchar(30) DEFAULT NULL,
  `operating_income` varchar(30) DEFAULT NULL,
  `other_income_net` varchar(30) DEFAULT NULL,
  `before_income_tax` varchar(30) DEFAULT NULL,
  `the_income_tax_net` varchar(30) DEFAULT NULL,
  `after_income_tax` varchar(30) DEFAULT NULL,
  `non_controlling_interest` varchar(30) DEFAULT NULL,
  `extraordinary_items` varchar(30) DEFAULT NULL,
  `net_income` varchar(30) DEFAULT NULL,
  `basic_eps` varchar(30) DEFAULT NULL,
  `diluted_eps` varchar(30) DEFAULT NULL,
  `dps` varchar(30) DEFAULT NULL,
  `pro_forma_income` varchar(30) DEFAULT NULL,
  `interest_expense` varchar(30) DEFAULT NULL,
  `depreciation` varchar(30) DEFAULT NULL,
  `special_items` varchar(30) DEFAULT NULL,
  `normalized_income_before_tax` varchar(30) DEFAULT NULL,
  `effect_sp_items_on_income_tax` varchar(30) DEFAULT NULL,
  `income_tax_exc_sp_items` varchar(30) DEFAULT NULL,
  `normalized_income_after_tax` varchar(30) DEFAULT NULL,
  `normalized_income` varchar(30) DEFAULT NULL,
  `nasic_normalized_eps` varchar(30) DEFAULT NULL,
  `diluted_normalized_eps` varchar(30) DEFAULT NULL,
  `cash_taxes_paid` varchar(30) DEFAULT NULL,
  `cash_interest_paid` varchar(30) DEFAULT NULL,
  `changes_in_working_capital` varchar(30) DEFAULT NULL,
  `total_cash_operations` varchar(30) DEFAULT NULL,
  `capital_expenditures` varchar(30) DEFAULT NULL,
  `other_investing_and_cfi` varchar(30) DEFAULT NULL,
  `total_cash_investing` varchar(30) DEFAULT NULL,
  `financing_cash_flow_items` varchar(30) DEFAULT NULL,
  `total_cash_dividends_paid` varchar(30) DEFAULT NULL,
  `issuance_of_stock_net` varchar(30) DEFAULT NULL,
  `issuance_of_debt_net` varchar(30) DEFAULT NULL,
  `total_cash_financing` varchar(30) DEFAULT NULL,
  `forex_effects` varchar(30) DEFAULT NULL,
  `net_change_in_cash` varchar(30) DEFAULT NULL,
  `net_cash_begin_balance_for_future` varchar(30) DEFAULT NULL,
  `net_cash_end_balance_for_future` varchar(30) DEFAULT NULL,
  `roic` varchar(30) DEFAULT NULL,
  `roe` varchar(30) DEFAULT NULL,
  `roa` varchar(30) DEFAULT NULL,
  `asset_turnover` varchar(30) DEFAULT NULL,
  `der` varchar(30) DEFAULT NULL,
  `current_ratio` varchar(30) DEFAULT NULL,
  `gross_margin` varchar(30) DEFAULT NULL,
  `operating_margin` varchar(30) DEFAULT NULL,
  `inventory_turnover` varchar(30) DEFAULT NULL,
  `days_sales_of_inventory` varchar(30) DEFAULT NULL,
  `receivable_days` varchar(30) DEFAULT NULL,
  `interest_coverage` varchar(30) DEFAULT NULL,
  `free_cash_flow` varchar(30) DEFAULT NULL,
  `free_cash_flow_to_equity` varchar(30) DEFAULT NULL,
  `dsri` varchar(30) DEFAULT NULL,
  `gmi` varchar(30) DEFAULT NULL,
  `aqi` varchar(30) DEFAULT NULL,
  `sgi` varchar(30) DEFAULT NULL,
  `depi` varchar(30) DEFAULT NULL,
  `sgai` varchar(30) DEFAULT NULL,
  `lvgi` varchar(30) DEFAULT NULL,
  `tata` varchar(30) DEFAULT NULL,
  `five_variable_version` varchar(30) DEFAULT NULL,
  `seven_variable_version` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `reset_token`, `created`, `modified`) VALUES
(2, 'admin@coba.tes', '$2y$10$THf2XvSQjhBC8uJ9WIUQAeR4kK.0/Vr7/NKRkaBdyX7j6ol8R1Jzm', '', '2015-11-06 13:41:19', '2015-11-06 13:41:19'),
(3, 'admin2@coba.tes', '$2y$10$ExySFJb.lRMJEgeJf599peMsv7LxdoKDtCE.A8vvtegHnP2xfHLry', NULL, '2015-11-06 17:32:42', '2015-11-06 17:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_rights`
--

CREATE TABLE IF NOT EXISTS `user_rights` (
  `user_id` int(11) NOT NULL,
  `fitur1` varchar(10) DEFAULT NULL,
  `fitur2` varchar(10) DEFAULT NULL,
  `fitur3` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emiten`
--
ALTER TABLE `emiten`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_statement`
--
ALTER TABLE `financial_statement`
 ADD PRIMARY KEY (`emiten_code`,`period`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rights`
--
ALTER TABLE `user_rights`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `financial_statement`
--
ALTER TABLE `financial_statement`
ADD CONSTRAINT `financial_statement_ibfk_1` FOREIGN KEY (`emiten_code`) REFERENCES `emiten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_rights`
--
ALTER TABLE `user_rights`
ADD CONSTRAINT `user_rights_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
