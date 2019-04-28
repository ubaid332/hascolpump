-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 05:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pump`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`ID`, `Name`, `ContactNo`, `Address`) VALUES
(3, 'parco', '4645645', 'swabi');

-- --------------------------------------------------------

--
-- Table structure for table `company_payments`
--

CREATE TABLE `company_payments` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Debit` float NOT NULL,
  `Credit` float NOT NULL,
  `PurchaseID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `ContactNo`, `Address`) VALUES
(1, 'sami', '4645645', 'charsada');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Debit` float NOT NULL,
  `Credit` float NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `SaleID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `displays`
--

CREATE TABLE `displays` (
  `ID` int(11) NOT NULL,
  `side` varchar(10) NOT NULL,
  `InitialReading` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displays`
--

INSERT INTO `displays` (`ID`, `side`, `InitialReading`) VALUES
(1, '1', 2121212),
(3, '2', 1211999);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Contactno` varchar(50) NOT NULL,
  `Joiningdate` date NOT NULL,
  `Leavingdate` date NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Etype` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Name`, `Contactno`, `Joiningdate`, `Leavingdate`, `Reason`, `Etype`, `Status`) VALUES
(1, 'shoaib', '03467871839', '2019-04-25', '2019-04-25', 'slary', 'gas controler', 1),
(2, 'basit', '03104101005', '0000-00-00', '0000-00-00', 'duty', 'controller', 0),
(3, 'abbas', '0849855', '2019-04-04', '2019-04-27', 'duty', 'controller', 0),
(4, 'ali', '0849855', '2019-04-10', '2019-04-26', 'duty', 'controller', 0),
(5, 'khann', '0849855', '2019-04-20', '2019-04-13', 'duty', 'controller', 1),
(6, 'salim', '0849855', '2019-04-09', '2019-04-10', 'duty', 'controller', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees_salaries`
--

CREATE TABLE `employees_salaries` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `Payable` float NOT NULL,
  `Paid` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ExpensetypeID` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `EmployeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ID`, `Date`, `ExpensetypeID`, `Amount`, `EmployeeID`) VALUES
(1, '2019-04-12', 1, 9944, 1),
(2, '2019-04-18', 2, 43333, 2),
(3, '2019-04-17', 2, 50000, 1),
(4, '2019-04-22', 1, 50000, 4),
(5, '2019-04-28', 2, 50000, 5),
(6, '2019-04-28', 2, 50000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `ID` int(11) NOT NULL,
  `Expensetype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`ID`, `Expensetype`) VALUES
(1, 'advertisment'),
(2, 'webite');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PurchaseRate` float NOT NULL,
  `SaleRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `Name`, `PurchaseRate`, `SaleRate`) VALUES
(1, 'patrol', 85, 101),
(2, 'patrol', 78, 56),
(3, 'patrol', 45, 45),
(4, 'patrol', 45, 45);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_bills`
--

CREATE TABLE `purchase_bills` (
  `ID` int(11) NOT NULL,
  `Date` int(11) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `G_Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `ID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` float NOT NULL,
  `PurchaseRate` float NOT NULL,
  `SaleRate` float NOT NULL,
  `PurchaseID` int(11) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_bills`
--

CREATE TABLE `sale_bills` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `G_Total` float NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `ID` int(11) NOT NULL,
  `SaleID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` float NOT NULL,
  `SaleRate` float NOT NULL,
  `Discount` float NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `EmployeeID`, `Email`, `Password`, `Role`) VALUES
(1, 1, 'shoaibcs7871@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 2, 'basitcs92@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_payments`
--
ALTER TABLE `company_payments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `purchaseID` (`PurchaseID`),
  ADD KEY `companyID` (`CompanyID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `customerID` (`CustomerID`),
  ADD KEY `saleID` (`SaleID`),
  ADD KEY `employeeID` (`EmployeeID`);

--
-- Indexes for table `displays`
--
ALTER TABLE `displays`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees_salaries`
--
ALTER TABLE `employees_salaries`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `employeeID` (`EmployeeID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `expensetypeID` (`ExpensetypeID`),
  ADD KEY `employeeID` (`EmployeeID`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchase_bills`
--
ALTER TABLE `purchase_bills`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `companyID` (`CompanyID`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `itemID` (`ItemID`),
  ADD KEY `purchaseID` (`PurchaseID`);

--
-- Indexes for table `sale_bills`
--
ALTER TABLE `sale_bills`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `customerID` (`CustomerID`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `itemID` (`ItemID`),
  ADD KEY `saleID` (`SaleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Etype` (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_payments`
--
ALTER TABLE `company_payments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `displays`
--
ALTER TABLE `displays`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees_salaries`
--
ALTER TABLE `employees_salaries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_bills`
--
ALTER TABLE `purchase_bills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_bills`
--
ALTER TABLE `sale_bills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_payments`
--
ALTER TABLE `company_payments`
  ADD CONSTRAINT `company_payments_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `companies` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD CONSTRAINT `customer_payments_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_payments_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `employees_salaries`
--
ALTER TABLE `employees_salaries`
  ADD CONSTRAINT `employees_salaries_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`ExpensetypeID`) REFERENCES `expense_types` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD CONSTRAINT `sale_items_ibfk_1` FOREIGN KEY (`saleID`) REFERENCES `sale_bills` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sale_items_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `items` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`ID`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
