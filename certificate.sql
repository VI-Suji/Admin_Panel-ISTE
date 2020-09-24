-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2020 at 02:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iste`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` varchar(50) NOT NULL,
  `name_event` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `grade` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `name_event`, `name`, `college`, `category`, `grade`) VALUES
('ISTETKMCE/20/O/01', 'Web Development', 'Nahla V', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/02', 'Web Development', 'Akshay Ravikumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/03', 'Web Development', 'Harikrishnan E R', 'Government Engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/04', 'Web Development', 'Athul Raj V', 'Government Engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/05', 'Web Development', 'Dr P T R NAMBIAR', 'MDIT', 'Participant', 'C'),
('ISTETKMCE/20/O/06', 'Web Development', 'Rahul Raj R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/07', 'Web Development', 'Aswin kp', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/08', 'Web Development', 'Amaya V Prakash', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/09', 'Web Development', 'Ravishankar S Menon', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/10', 'Web Development', 'Deekshitha Dev', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/100', 'Digital Designing', 'Rajeev N', 'Sn college, kollam', 'Participant', 'C'),
('ISTETKMCE/20/O/101', 'Digital Designing', 'Krishnapriya k', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/102', 'Digital Designing', 'Simi', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/103', 'Digital Designing', 'LIBINA N R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/104', 'Digital Designing', 'Deekshitha Dev', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/105', 'Digital Designing', 'Aromal Viswan.V.L', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/106', 'Digital Designing', 'Aravind Krishnan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/107', 'Digital Designing', 'ARDRA S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/108', 'Digital Designing', 'Sooraj S Kumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/109', 'Digital Designing', 'Roshni Roy', 'Mar Baselios College of Engineering and Technology', 'Participant', 'A'),
('ISTETKMCE/20/O/11', 'Web Development', 'Joel Mathew Eby', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/110', 'Digital Designing', 'Tessy T S', 'Mar Baselios College of Engineering and Technology', 'Participant', 'A'),
('ISTETKMCE/20/O/111', 'Digital Designing', 'Sneha Lisha Sajan', 'Mar Baselios College of Engineering and Technology', 'Participant', 'A'),
('ISTETKMCE/20/O/112', 'Digital Designing', 'Abhilash George Saji', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/113', 'Digital Designing', 'Akash Jose Saji', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/114', 'Digital Designing', 'Pranav E', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/115', 'Digital Designing', 'Mariya Sneha Benny', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/116', 'Digital Designing', 'Firdouse F.S.', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/117', 'Digital Designing', 'Nayanthara B', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/118', 'Digital Designing', 'Mukund Rajesh', 'CUSAT', 'Participant', 'C'),
('ISTETKMCE/20/O/119', 'Digital Designing', 'ROYAL GEORGE ABRAHAM', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/12', 'Web Development', 'Sooraj S Kumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/120', 'Digital Designing', 'Justin biju', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/121', 'Digital Designing', 'Lakshmi S Jeeva', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/122', 'Digital Designing', 'Bibin Francis', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/123', 'Digital Designing', 'Yaseen Muhammed Afsal', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/124', 'Digital Designing', 'Shajil', 'Saintgits College of engineering', 'Participant', 'C'),
('ISTETKMCE/20/O/125', 'Digital Designing', 'Abhiraj R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/126', 'Digital Designing', 'Govind M Nair', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/127', 'Digital Designing', 'Jobin Manoj', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/128', 'Digital Designing', 'Karthik Sunil K', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/129', 'Digital Designing', 'Abhishek S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/13', 'Web Development', 'Firdouse F.S.', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/130', 'Digital Designing', 'Nadia Shajan George', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/131', 'Digital Designing', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/132', 'Digital Designing', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/133', 'Digital Designing', 'ATHUL BABU', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/134', 'Digital Designing', 'Abhiram K M', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/135', 'Digital Designing', 'Anjana santhosh', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/136', 'Digital Designing', 'Sreelekshmi N S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/137', 'Digital Designing', 'Sobin Thomas', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/138', 'Digital Designing', 'Mohamed sabir', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/139', 'Digital Designing', 'Sreeram S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/14', 'Web Development', 'Muhammad  Mubashir K', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/140', 'Digital Designing', 'MUHAMMED HISHAM V', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/141', 'Digital Designing', 'Aswin Sankar P D', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/142', 'Digital Designing', 'Nithin Prakash', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/143', 'Digital Designing', 'Mathew Varkey', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/144', 'Digital Designing', 'Srihari R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/145', 'Digital Designing', 'Midhun GG', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/146', 'Digital Designing', 'Namitha mohan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/147', 'Digital Designing', 'CHETHAN KRISHNA', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/148', 'Digital Designing', 'ROJIN RAJU MATHEW', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/149', 'Digital Designing', 'ASWIN P M', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/15', 'Web Development', 'Aswanth P S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/150', 'Digital Designing', 'Sharon Anoop', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/151', 'Digital Designing', 'Anagha M Das', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/152', 'Digital Designing', 'Merish K Mathew', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/153', 'Digital Designing', 'R Sakthi Priya', 'Mar Baselios College of Engineering and Technology', 'Participant', 'A'),
('ISTETKMCE/20/O/154', 'Digital Designing', 'Akshay Ravikumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/155', 'Digital Designing', 'Harikrishnan E R', 'Government engineering college Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/156', 'Digital Designing', 'Anamika Pidharody', 'Government engineering college Kozhikode', 'Participant', 'A'),
('ISTETKMCE/20/O/157', 'Digital Designing', 'ABHIJITH B S', 'Government engineering college Kozhikode', 'Participant', 'A'),
('ISTETKMCE/20/O/158', 'Digital Designing', 'Anugrah k kumar', 'Government engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/159', 'Digital Designing', 'Noufan N', 'Government engineering college Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/16', 'Web Development', 'Abhiraj R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/160', 'Digital Designing', 'Nihal C', 'Government engineering college Kozhikode', 'Participant', 'A'),
('ISTETKMCE/20/O/161', 'Digital Designing', 'Aswanth P S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/162', 'Digital Designing', 'PARVEES AHAMED', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/163', 'Digital Designing', 'DURGA B R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/164', 'Digital Designing', 'Flinto Justin', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/165', 'Digital Designing', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/166', 'Digital Designing', 'Sobin Thomas', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/167', 'Digital Designing', 'Ansi A S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/168', 'Digital Designing', 'Aswin kp', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/169', 'Web Development', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/17', 'Web Development', 'Sidharth Raj', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/170', 'Web Development', 'SOORAJ TS', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/171', 'Web Development', 'Varsha Premanand', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/172', 'Web Development', 'K S AJAYALEKSHMY', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/173', 'Web Development', 'Lekshmi S Raj', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/174', 'Web Development', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/175', 'Web Development', 'Krishnapriya k', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/176', 'Web Development', 'Abhilash George Saji', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/177', 'Web Development', 'Akash Jose Saji', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/178', 'Web Development', 'Nayanthara B', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/179', 'Web Development', 'ROYAL GEORGE ABRAHAM', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/18', 'Web Development', 'MOHAMED HADIQ', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/180', 'Web Development', 'Lakshmi S Jeeva', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/181', 'Web Development', 'Abhiraj R', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/182', 'Web Development', 'Jobin Manoj', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/183', 'Web Development', 'Karthik Sunil K', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/184', 'Web Development', 'ATHUL BABU', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/185', 'Web Development', 'Abhiram K M', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/186', 'Web Development', 'Sreelekshmi N S', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/187', 'Web Development', 'Mohamed sabir', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/188', 'Web Development', 'MUHAMMED HISHAM V', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/189', 'Web Development', 'Aswin Sankar P D', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/19', 'Web Development', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/190', 'Web Development', 'Sharon Anoop', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/191', 'Digital Designing', 'Lekshmi S Raj', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/192', 'Digital Designing', 'Krishnapriya k', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/193', 'Digital Designing', 'Simi', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/194', 'Digital Designing', 'LIBINA N R', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/195', 'Digital Designing', 'Deekshitha Dev', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/196', 'Digital Designing', 'Roshni Roy', 'Mar Baselios College of Engineering and Technology', 'Recommendation', ''),
('ISTETKMCE/20/O/197', 'Digital Designing', 'Tessy T S', 'Mar Baselios College of Engineering and Technology', 'Recommendation', ''),
('ISTETKMCE/20/O/198', 'Digital Designing', 'Sneha Lisha Sajan', 'Mar Baselios College of Engineering and Technology', 'Recommendation', ''),
('ISTETKMCE/20/O/199', 'Digital Designing', 'Abhilash George Saji', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/20', 'Web Development', 'James George', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/200', 'Digital Designing', 'Akash Jose Saji', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/201', 'Digital Designing', 'Nayanthara B', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/202', 'Digital Designing', 'ROYAL GEORGE ABRAHAM', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/203', 'Digital Designing', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/204', 'Digital Designing', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/205', 'Digital Designing', 'ATHUL BABU', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/206', 'Digital Designing', 'Abhiram K M', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/207', 'Digital Designing', 'Sreelekshmi N S', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/208', 'Digital Designing', 'Sharon Anoop', 'TKM COLLEGE OF ENGINEERING', 'Recommendation', ''),
('ISTETKMCE/20/O/209', 'Digital Designing', 'R Sakthi Priya', 'Mar Baselios College of Engineering and Technology', 'Recommendation', ''),
('ISTETKMCE/20/O/21', 'Web Development', 'SOORAJ TS', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/210', 'Digital Designing', 'Anamika Pidharody', 'Government engineering college Kozhikode', 'Recommendation', ''),
('ISTETKMCE/20/O/211', 'Digital Designing', 'ABHIJITH B S', 'Government engineering college Kozhikode', 'Recommendation', ''),
('ISTETKMCE/20/O/212', 'Digital Designing', 'Nihal C', 'Government engineering college Kozhikode', 'Recommendation', ''),
('ISTETKMCE/20/O/22', 'Web Development', 'ABIN IYPE JOHNSON', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/23', 'Web Development', 'Sobin Thomas', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/24', 'Web Development', 'Varsha Premanand', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/25', 'Web Development', 'Vivek Antony c v', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/26', 'Web Development', 'Srihari R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/27', 'Web Development', 'K S AJAYALEKSHMY', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/28', 'Web Development', 'Suraj S Kumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/29', 'Web Development', 'Abel S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/30', 'Web Development', 'SANGEETH K', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/31', 'Web Development', 'KEERTHI KJ', 'university college of engineering kariavattam', 'Participant', 'C'),
('ISTETKMCE/20/O/32', 'Web Development', 'ASHWIN S S', 'HANSRAJ COLLEGE', 'Participant', 'C'),
('ISTETKMCE/20/O/33', 'Web Development', 'Harikrishnan E R', 'Government Engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/34', 'Web Development', 'Anugrah k kunar', 'Government engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/35', 'Web Development', 'Nihal C', 'Government engineering college Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/36', 'Web Development', 'Lekshmi S Raj', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/37', 'Web Development', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/38', 'Web Development', 'Farhana', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/39', 'Web Development', 'Rajeev N', 'Sn college, kollam', 'Participant', 'C'),
('ISTETKMCE/20/O/40', 'Web Development', 'Krishnapriya k', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/41', 'Web Development', 'Simi', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/42', 'Web Development', 'LIBINA N R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/43', 'Web Development', 'Deekshitha Dev', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/44', 'Web Development', 'Aromal Viswan.V.L', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/45', 'Web Development', 'Aravind Krishnan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/46', 'Web Development', 'ARDRA S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/47', 'Web Development', 'Sooraj S Kumar', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/48', 'Web Development', 'Roshni Roy', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/49', 'Web Development', 'Tessy T S', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/50', 'Web Development', 'Sneha Lisha Sajan', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/51', 'Web Development', 'Abhilash George Saji', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/52', 'Web Development', 'Akash Jose Saji', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/53', 'Web Development', 'Pranav E', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/54', 'Web Development', 'Mariya Sneha Benny', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/55', 'Web Development', 'Firdouse F.S.', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/56', 'Web Development', 'Nayanthara B', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/57', 'Web Development', 'Mukund Rajesh', 'CUSAT', 'Participant', 'C'),
('ISTETKMCE/20/O/58', 'Web Development', 'ROYAL GEORGE ABRAHAM', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/59', 'Web Development', 'Justin biju', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/60', 'Web Development', 'Lakshmi S Jeeva', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/61', 'Web Development', 'Bibin Francis', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/62', 'Web Development', 'Yaseen Muhammed Afsal', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/63', 'Web Development', 'Shajil', 'Saintgits College of engineering', 'Participant', 'C'),
('ISTETKMCE/20/O/64', 'Web Development', 'Abhiraj R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/65', 'Web Development', 'Govind M Nair', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/66', 'Web Development', 'Jobin Manoj', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/67', 'Web Development', 'Karthik Sunil K', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/68', 'Web Development', 'Abhishek S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/69', 'Web Development', 'Nadia Shajan George', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/70', 'Web Development', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/71', 'Web Development', 'Jassim S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/72', 'Web Development', 'ATHUL BABU', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/73', 'Web Development', 'Abhiram K M', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/74', 'Web Development', 'Anjana santhosh', 'Mar Baselios College of Engineering and Technology', 'Participant', 'C'),
('ISTETKMCE/20/O/75', 'Web Development', 'Sreelekshmi N S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/76', 'Web Development', 'Sobin Thomas', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/77', 'Web Development', 'Mohamed sabir', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/78', 'Web Development', 'Sreeram S', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/79', 'Web Development', 'MUHAMMED HISHAM V', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/80', 'Web Development', 'Aswin Sankar P D', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/81', 'Web Development', 'Nithin Prakash', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/82', 'Web Development', 'Mathew Varkey', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/83', 'Web Development', 'Srihari R', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/84', 'Web Development', 'Midhun GG', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/85', 'Web Development', 'Namitha mohan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/86', 'Web Development', 'CHETHAN KRISHNA', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'B'),
('ISTETKMCE/20/O/87', 'Web Development', 'ROJIN RAJU MATHEW', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/88', 'Web Development', 'ASWIN P M', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/89', 'Web Development', 'Sharon Anoop', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/90', 'Web Development', 'Anagha M Das', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/91', 'Digital Designing', 'SANGEETH K', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/92', 'Digital Designing', 'KEERTHI KJ', 'university college of engineering kariavattam', 'Participant', 'C'),
('ISTETKMCE/20/O/93', 'Digital Designing', 'ASHWIN S S', 'HANSRAJ COLLEGE', 'Participant', 'C'),
('ISTETKMCE/20/O/94', 'Digital Designing', 'Harikrishnan E R', 'Government Engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/95', 'Digital Designing', 'Anugrah k kunar', 'Government engineering College Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/96', 'Digital Designing', 'Nihal C', 'Government engineering college Kozhikode', 'Participant', 'C'),
('ISTETKMCE/20/O/97', 'Digital Designing', 'Lekshmi S Raj', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'A'),
('ISTETKMCE/20/O/98', 'Digital Designing', 'Akshaya Vamanan', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C'),
('ISTETKMCE/20/O/99', 'Digital Designing', 'Farhana', 'TKM COLLEGE OF ENGINEERING', 'Participant', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
