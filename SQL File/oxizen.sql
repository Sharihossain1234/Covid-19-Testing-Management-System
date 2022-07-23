--
-- Database: `covidtmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oxizen `
--

CREATE TABLE `tbl_oxizen` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_oxizen`
--

INSERT INTO `tbl_oxizen` (`id`, `Name`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Songjog', 'Dhaka', '01711930935,01819210344,01717902163', 'Nil', 'Songjog.org'),
(2, 'Priyojon', 'Dhaka', '09603603603', 'Nil', 'www.priyojon.care'),
(3, 'Linde Bangladesh', 'Dhaka', 'Tel: 8870322-27 Ext-147 Mobile: 01708500600 Customer Service: 08000303303 toll free', 'info.bd@linde.com', 'www.linde.com.bd'),
(4, 'Israt Care Givers', 'Dhaka', '01716- 021021,01911- 545552', 'isratnursing.bd@gmail.com', 'isratnursingcarebd.com/'),
(5, 'Medi Shop','Dhaka', '01682000000', 'Nil', 'medishop.com.bd'),
(6, 'Timely Product Ltd', 'Dhaka', '01400331122,01712444336', 'support@timelyproduct.com', 'www.timelyproduct.com'),
(7, 'Oxygen Cylinder BD', 'Dhaka', '01714585817,01719661366', 'support@oxygencylinderbd.com', 'www.oxygencylinderbd.com'),
(8, 'Spectra Oxygen Ltd.', 'Dhaka', '01755544222,01755544223', 'info@sol.com.bd', 'sol.com.bd'),
(9, 'Oxygen Bank', 'Chittagong', '01841040540,01711748927', 'Nil', 'Nil'),
(10, 'Oxygen Bank', 'Coxs Bazar', '01767122515', 'Nil', 'Nil'),
(11, 'Oxygen Bank', 'Cumilla', '01404050506', 'Nil', 'Nil'),
(12, 'Oxygen Bank', 'Rajshahi','1712681536', 'Nil', 'Nil'),
(13, 'Oxygen Bank','Sylhet','1715017820', 'Nil', 'Nil'),
(14, 'Oxygen Bank', 'Barisal', '01715422783', 'Nil', 'Nil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_oxizen`
--
ALTER TABLE `tbl_oxizen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_oxizen`
--
ALTER TABLE `tbl_oxizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;