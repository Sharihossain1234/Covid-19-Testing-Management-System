--
-- Database: `covidtmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Dhaka CMH Ambulance Service', 'Hotline: 9871469', 'Dhaka', '1205', 'Bangladesh'),
(2, 'Dhaka ICDDRB', 'Hotline: 8811751-60', 'Dhaka', '1205', 'Bangladesh'),
(3, 'Dhaka Heart HospitalAmbulance Service', 'Hotline: 9801874, 9803302', 'Dhaka', '1205', 'Bangladesh'),
(4, 'Dhaka Medical College HospitalAmbulance Service', 'Hotline: 8626812', 'Dhaka', '1205', 'Bangladesh'),
(5, 'Dhaka Apanjon Ambulance Service','Hotline: 9125420', 'Dhaka', '1205', 'Bangladesh'),
(6, 'Dhaka BARDEM Ambulance Service', 'Hotline: 9661551-60, 8616641-50', 'Dhaka', '1205', 'Bangladesh'),
(7, 'Dhaka Anju-Man-e-Mafidul IslamAmbulance Service', 'Hotline: 9336611, 7411660, 7410786', 'Dhaka', '1205', 'Bangladesh'),
(8, 'Dhaka Holy Family Hospital Ambulance Service', 'Hotline: 8014476', 'Dhaka', '1205', 'Bangladesh'),
(9, 'Dhaka Al-Markazul lslami Ambulance Service', 'Hotline: 9127867, 8114980', 'Dhaka', '1205', 'Bangladesh'),
(10, 'Dhaka IPGMR Ambulance Service', 'Hotline: 8614001-5, 8614545-9', 'Dhaka', '1205', 'Bangladesh'),
(11, 'Dhaka Shahid Suhrawardi Hospital Ambulance Service', 'Hotline: 9130800', 'Dhaka', '1205', 'Bangladesh'),
(12, 'Dhaka Salimullah Medical College Ambulance Service', 'Hotline: 7319002-6', 'Dhaka', '1205', 'Bangladeksh'),
(13, 'Dhaka Rafa Ambulance Service','Hotline: 9110663','Dhaka', '1205', 'Bangladesh'),
(14, 'Dhaka Red Crescent Ambulance Service', 'Hotline: 9330188-89', 'Dhaka', '1205', 'Bangladesh');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;