<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class stat_pu extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function stat_penduduk_umur(){
	 	$sql="SELECT 
				SUM(IF((umur >= 0)  AND (umur <= 5) AND jk='l',1,0)) AS u_0_5_l
				,SUM(IF((umur >= 0)  AND (umur <= 5) AND jk='p',1,0)) AS u_0_5_p
				,SUM(IF((umur >= 0)  AND (umur <= 5) ,1,0)) AS u_0_5
				
				,SUM(IF((umur >= 6)  AND (umur <= 10) AND jk='l',1,0)) AS u_6_10_l
				,SUM(IF((umur >= 6)  AND (umur <= 10) AND jk='p',1,0)) AS u_6_10_p
				,SUM(IF((umur >= 6)  AND (umur <= 10),1,0)) AS u_6_10
				
				,SUM(IF((umur >= 11)  AND (umur <= 20) AND jk='l',1,0)) AS u_11_20_l
				,SUM(IF((umur >= 11)  AND (umur <= 20) AND jk='p',1,0)) AS u_11_20_p
				
				,SUM(IF((umur >= 11)  AND (umur <= 20) AND jk='l',1,0)) AS u_11_20_l
				,SUM(IF((umur >= 11)  AND (umur <= 20) AND jk='p',1,0)) AS u_11_20_p
				,SUM(IF((umur >= 11)  AND (umur <= 20),1,0)) AS u_11_20
				
				,SUM(IF((umur >= 21)  AND (umur <= 30) AND jk='l',1,0)) AS u_21_30_l
				,SUM(IF((umur >= 21)  AND (umur <= 30) AND jk='p',1,0)) AS u_21_30_p
				,SUM(IF((umur >= 21)  AND (umur <= 30),1,0)) AS u_21_30
				
				,SUM(IF((umur >= 31)  AND (umur <= 40) AND jk='l',1,0)) AS u_31_40_l
				,SUM(IF((umur >= 31)  AND (umur <= 40) AND jk='p',1,0)) AS u_31_40_p
				,SUM(IF((umur >= 31)  AND (umur <= 40),1,0)) AS u_31_40
				
				,SUM(IF((umur >= 41)  AND (umur <= 50) AND jk='l',1,0)) AS u_41_50_l
				,SUM(IF((umur >= 41)  AND (umur <= 50) AND jk='p',1,0)) AS u_41_50_p
				,SUM(IF((umur >= 41)  AND (umur <= 50),1,0)) AS u_41_50
				
				,SUM(IF((umur >= 51)  AND (umur <= 60) AND jk='l',1,0)) AS u_51_60_l
				,SUM(IF((umur >= 51)  AND (umur <= 60) AND jk='p',1,0)) AS u_51_60_p
				,SUM(IF((umur >= 51)  AND (umur <= 60),1,0)) AS u_51_60
				
				,SUM(IF((umur >= 61)  AND (umur <= 70) AND jk='l',1,0)) AS u_61_70_l
				,SUM(IF((umur >= 61)  AND (umur <= 70) AND jk='p',1,0)) AS u_61_70_p
				,SUM(IF((umur >= 61)  AND (umur <= 70),1,0)) AS u_61_70
				
				,SUM(IF(umur >70 AND jk='l' ,1,0)) AS u_70_l
				,SUM(IF(umur >70 AND jk='p' ,1,0)) AS u_70_p
				,SUM(IF(umur >70 ,1,0)) AS u_70
				FROM v_penduduk2 p
				WHERE p.hidup_mati='1' AND status_kependudukan not in  ('3')";
			$res  = $this->db->query($sql);
			return $res;
	 }

	 function  stat_penduduk_umur_pertahun(){
	 	$sql="SELECT 
				SUM(IF((umur = 0) and jk='l',1,0)) AS u_0_l
				,SUM(IF((umur = 0) and jk='p',1,0)) AS u_0_p
				,SUM(IF((umur = 0)  AND (umur = 0) ,1,0)) AS u_0
				
				,SUM(IF((umur = 1) and jk='l',1,0)) AS u_1_l
				,SUM(IF((umur = 1) and jk='p',1,0)) AS u_1_p
				,SUM(IF((umur = 1)  AND (umur = 1) ,1,0)) AS u_1
				
				,SUM(IF((umur = 2) and jk='l',1,0)) AS u_2_l
				,SUM(IF((umur = 2) and jk='p',1,0)) AS u_2_p
				,SUM(IF((umur = 2)  AND (umur = 2) ,1,0)) AS u_2

				,SUM(IF((umur = 3) and jk='l',1,0)) AS u_3_l
				,SUM(IF((umur = 3) and jk='p',1,0)) AS u_3_p
				,SUM(IF((umur = 3)  AND (umur = 3) ,1,0)) AS u_3


				,SUM(IF((umur = 4) and jk='l',1,0)) AS u_4_l
				,SUM(IF((umur = 4) and jk='p',1,0)) AS u_4_p
				,SUM(IF((umur = 4)  AND (umur = 4) ,1,0)) AS u_4
				
				
				,SUM(IF((umur = 5) and jk='l',1,0)) AS u_5_l
				,SUM(IF((umur = 5) and jk='p',1,0)) AS u_5_p
				,SUM(IF((umur = 5)  AND (umur = 5) ,1,0)) AS u_5


				,SUM(IF((umur = 6) and jk='l',1,0)) AS u_6_l
				,SUM(IF((umur = 6) and jk='p',1,0)) AS u_6_p
				,SUM(IF((umur = 6)  AND (umur = 6) ,1,0)) AS u_6


				,SUM(IF((umur = 7) and jk='l',1,0)) AS u_7_l
				,SUM(IF((umur = 7) and jk='p',1,0)) AS u_7_p
				,SUM(IF((umur = 7)  AND (umur = 7) ,1,0)) AS u_7


				,SUM(IF((umur = 8) and jk='l',1,0)) AS u_8_l
				,SUM(IF((umur = 8) and jk='p',1,0)) AS u_8_p
				,SUM(IF((umur = 8)  AND (umur = 8) ,1,0)) AS u_8


				,SUM(IF((umur = 9) and jk='l',1,0)) AS u_9_l
				,SUM(IF((umur = 9) and jk='p',1,0)) AS u_9_p
				,SUM(IF((umur = 9)  AND (umur = 9) ,1,0)) AS u_9


				,SUM(IF((umur = 10) and jk='l',1,0)) AS u_10_l
				,SUM(IF((umur = 10) and jk='p',1,0)) AS u_10_p
				,SUM(IF((umur = 10)  AND (umur = 10) ,1,0)) AS u_10

				,SUM(IF((umur = 11) and jk='l',1,0)) AS u_11_l
				,SUM(IF((umur = 11) and jk='p',1,0)) AS u_11_p
				,SUM(IF((umur = 11)  AND (umur = 11) ,1,0)) AS u_11

				,SUM(IF((umur = 12) and jk='l',1,0)) AS u_12_l
				,SUM(IF((umur = 12) and jk='p',1,0)) AS u_12_p
				,SUM(IF((umur = 12)  AND (umur = 12) ,1,0)) AS u_12

				,SUM(IF((umur = 13) and jk='l',1,0)) AS u_13_l
				,SUM(IF((umur = 13) and jk='p',1,0)) AS u_13_p
				,SUM(IF((umur = 13)  AND (umur = 13) ,1,0)) AS u_13

				,SUM(IF((umur = 14) and jk='l',1,0)) AS u_14_l
				,SUM(IF((umur = 14) and jk='p',1,0)) AS u_14_p
				,SUM(IF((umur = 14)  AND (umur = 14) ,1,0)) AS u_14

				,SUM(IF((umur = 15) and jk='l',1,0)) AS u_15_l
				,SUM(IF((umur = 15) and jk='p',1,0)) AS u_15_p
				,SUM(IF((umur = 15)  AND (umur = 15) ,1,0)) AS u_15

				,SUM(IF((umur = 16) and jk='l',1,0)) AS u_16_l
				,SUM(IF((umur = 16) and jk='p',1,0)) AS u_16_p
				,SUM(IF((umur = 16)  AND (umur = 16) ,1,0)) AS u_16

				,SUM(IF((umur = 17) and jk='l',1,0)) AS u_17_l
				,SUM(IF((umur = 17) and jk='p',1,0)) AS u_17_p
				,SUM(IF((umur = 17)  AND (umur = 17) ,1,0)) AS u_17

				,SUM(IF((umur = 18) and jk='l',1,0)) AS u_18_l
				,SUM(IF((umur = 18) and jk='p',1,0)) AS u_18_p
				,SUM(IF((umur = 18)  AND (umur = 18) ,1,0)) AS u_18

				,SUM(IF((umur = 19) and jk='l',1,0)) AS u_19_l
				,SUM(IF((umur = 19) and jk='p',1,0)) AS u_19_p
				,SUM(IF((umur = 19)  AND (umur = 19) ,1,0)) AS u_19

				,SUM(IF((umur = 20) and jk='l',1,0)) AS u_20_l
				,SUM(IF((umur = 20) and jk='p',1,0)) AS u_20_p
				,SUM(IF((umur = 20)  AND (umur = 20) ,1,0)) AS u_20

				,SUM(IF((umur = 21) and jk='l',1,0)) AS u_21_l
				,SUM(IF((umur = 21) and jk='p',1,0)) AS u_21_p
				,SUM(IF((umur = 21)  AND (umur = 21) ,1,0)) AS u_21

				,SUM(IF((umur = 22) and jk='l',1,0)) AS u_22_l
				,SUM(IF((umur = 22) and jk='p',1,0)) AS u_22_p
				,SUM(IF((umur = 22)  AND (umur = 22) ,1,0)) AS u_22

				,SUM(IF((umur = 23) and jk='l',1,0)) AS u_23_l
				,SUM(IF((umur = 23) and jk='p',1,0)) AS u_23_p
				,SUM(IF((umur = 23)  AND (umur = 23) ,1,0)) AS u_23

				,SUM(IF((umur = 24) and jk='l',1,0)) AS u_24_l
				,SUM(IF((umur = 24) and jk='p',1,0)) AS u_24_p
				,SUM(IF((umur = 24)  AND (umur = 24) ,1,0)) AS u_24

				,SUM(IF((umur = 25) and jk='l',1,0)) AS u_25_l
				,SUM(IF((umur = 25) and jk='p',1,0)) AS u_25_p
				,SUM(IF((umur = 25)  AND (umur = 25) ,1,0)) AS u_25

				,SUM(IF((umur = 26) and jk='l',1,0)) AS u_26_l
				,SUM(IF((umur = 26) and jk='p',1,0)) AS u_26_p
				,SUM(IF((umur = 26)  AND (umur = 26) ,1,0)) AS u_26

				,SUM(IF((umur = 27) and jk='l',1,0)) AS u_27_l
				,SUM(IF((umur = 27) and jk='p',1,0)) AS u_27_p
				,SUM(IF((umur = 27)  AND (umur = 27) ,1,0)) AS u_27

				,SUM(IF((umur = 28) and jk='l',1,0)) AS u_28_l
				,SUM(IF((umur = 28) and jk='p',1,0)) AS u_28_p
				,SUM(IF((umur = 28)  AND (umur = 28) ,1,0)) AS u_28

				,SUM(IF((umur = 29) and jk='l',1,0)) AS u_29_l
				,SUM(IF((umur = 29) and jk='p',1,0)) AS u_29_p
				,SUM(IF((umur = 29)  AND (umur = 29) ,1,0)) AS u_29

				,SUM(IF((umur = 30) and jk='l',1,0)) AS u_30_l
				,SUM(IF((umur = 30) and jk='p',1,0)) AS u_30_p
				,SUM(IF((umur = 30)  AND (umur = 30) ,1,0)) AS u_30

				,SUM(IF((umur = 31) and jk='l',1,0)) AS u_31_l
				,SUM(IF((umur = 31) and jk='p',1,0)) AS u_31_p
				,SUM(IF((umur = 31)  AND (umur = 31) ,1,0)) AS u_31

				,SUM(IF((umur = 32) and jk='l',1,0)) AS u_32_l
				,SUM(IF((umur = 32) and jk='p',1,0)) AS u_32_p
				,SUM(IF((umur = 32)  AND (umur = 32) ,1,0)) AS u_32

				,SUM(IF((umur = 33) and jk='l',1,0)) AS u_33_l
				,SUM(IF((umur = 33) and jk='p',1,0)) AS u_33_p
				,SUM(IF((umur = 33)  AND (umur = 33) ,1,0)) AS u_33

				,SUM(IF((umur = 34) and jk='l',1,0)) AS u_34_l
				,SUM(IF((umur = 34) and jk='p',1,0)) AS u_34_p
				,SUM(IF((umur = 34)  AND (umur = 34) ,1,0)) AS u_34

				,SUM(IF((umur = 35) and jk='l',1,0)) AS u_35_l
				,SUM(IF((umur = 35) and jk='p',1,0)) AS u_35_p
				,SUM(IF((umur = 35)  AND (umur = 35) ,1,0)) AS u_35

				,SUM(IF((umur = 36) and jk='l',1,0)) AS u_36_l
				,SUM(IF((umur = 36) and jk='p',1,0)) AS u_36_p
				,SUM(IF((umur = 36)  AND (umur = 36) ,1,0)) AS u_36

				,SUM(IF((umur = 37) and jk='l',1,0)) AS u_37_l
				,SUM(IF((umur = 37) and jk='p',1,0)) AS u_37_p
				,SUM(IF((umur = 37)  AND (umur = 37) ,1,0)) AS u_37

				,SUM(IF((umur = 38) and jk='l',1,0)) AS u_38_l
				,SUM(IF((umur = 38) and jk='p',1,0)) AS u_38_p
				,SUM(IF((umur = 38)  AND (umur = 38) ,1,0)) AS u_38

				,SUM(IF((umur = 39) and jk='l',1,0)) AS u_39_l
				,SUM(IF((umur = 39) and jk='p',1,0)) AS u_39_p
				,SUM(IF((umur = 39)  AND (umur = 39) ,1,0)) AS u_39

				,SUM(IF((umur = 40) and jk='l',1,0)) AS u_40_l
				,SUM(IF((umur = 40) and jk='p',1,0)) AS u_40_p
				,SUM(IF((umur = 40)  AND (umur = 40) ,1,0)) AS u_40

				,SUM(IF((umur = 41) and jk='l',1,0)) AS u_41_l
				,SUM(IF((umur = 41) and jk='p',1,0)) AS u_41_p
				,SUM(IF((umur = 41)  AND (umur = 41) ,1,0)) AS u_41

				,SUM(IF((umur = 42) and jk='l',1,0)) AS u_42_l
				,SUM(IF((umur = 42) and jk='p',1,0)) AS u_42_p
				,SUM(IF((umur = 42)  AND (umur = 42) ,1,0)) AS u_42

				,SUM(IF((umur = 43) and jk='l',1,0)) AS u_43_l
				,SUM(IF((umur = 43) and jk='p',1,0)) AS u_43_p
				,SUM(IF((umur = 43)  AND (umur = 43) ,1,0)) AS u_43

				,SUM(IF((umur = 44) and jk='l',1,0)) AS u_44_l
				,SUM(IF((umur = 44) and jk='p',1,0)) AS u_44_p
				,SUM(IF((umur = 44)  AND (umur = 44) ,1,0)) AS u_44

				,SUM(IF((umur = 45) and jk='l',1,0)) AS u_45_l
				,SUM(IF((umur = 45) and jk='p',1,0)) AS u_45_p
				,SUM(IF((umur = 45)  AND (umur = 45) ,1,0)) AS u_45

				,SUM(IF((umur = 46) and jk='l',1,0)) AS u_46_l
				,SUM(IF((umur = 46) and jk='p',1,0)) AS u_46_p
				,SUM(IF((umur = 46)  AND (umur = 46) ,1,0)) AS u_46

				,SUM(IF((umur = 47) and jk='l',1,0)) AS u_47_l
				,SUM(IF((umur = 47) and jk='p',1,0)) AS u_47_p
				,SUM(IF((umur = 47)  AND (umur = 47) ,1,0)) AS u_47

				,SUM(IF((umur = 48) and jk='l',1,0)) AS u_48_l
				,SUM(IF((umur = 48) and jk='p',1,0)) AS u_48_p
				,SUM(IF((umur = 48)  AND (umur = 48) ,1,0)) AS u_48

				,SUM(IF((umur = 49) and jk='l',1,0)) AS u_49_l
				,SUM(IF((umur = 49) and jk='p',1,0)) AS u_49_p
				,SUM(IF((umur = 49)  AND (umur = 49) ,1,0)) AS u_49

				,SUM(IF((umur = 50) and jk='l',1,0)) AS u_50_l
				,SUM(IF((umur = 50) and jk='p',1,0)) AS u_50_p
				,SUM(IF((umur = 50)  AND (umur = 50) ,1,0)) AS u_50

				,SUM(IF((umur = 51) and jk='l',1,0)) AS u_51_l
				,SUM(IF((umur = 51) and jk='p',1,0)) AS u_51_p
				,SUM(IF((umur = 51)  AND (umur = 51) ,1,0)) AS u_51

				,SUM(IF((umur = 52) and jk='l',1,0)) AS u_52_l
				,SUM(IF((umur = 52) and jk='p',1,0)) AS u_52_p
				,SUM(IF((umur = 52)  AND (umur = 52) ,1,0)) AS u_52

				,SUM(IF((umur = 53) and jk='l',1,0)) AS u_53_l
				,SUM(IF((umur = 53) and jk='p',1,0)) AS u_53_p
				,SUM(IF((umur = 53)  AND (umur = 53) ,1,0)) AS u_53

				,SUM(IF((umur = 54) and jk='l',1,0)) AS u_54_l
				,SUM(IF((umur = 54) and jk='p',1,0)) AS u_54_p
				,SUM(IF((umur = 54)  AND (umur = 54) ,1,0)) AS u_54

				,SUM(IF((umur = 55) and jk='l',1,0)) AS u_55_l
				,SUM(IF((umur = 55) and jk='p',1,0)) AS u_55_p
				,SUM(IF((umur = 55)  AND (umur = 55) ,1,0)) AS u_55

				,SUM(IF((umur = 56) and jk='l',1,0)) AS u_56_l
				,SUM(IF((umur = 56) and jk='p',1,0)) AS u_56_p
				,SUM(IF((umur = 56)  AND (umur = 56) ,1,0)) AS u_56

				,SUM(IF((umur = 57) and jk='l',1,0)) AS u_57_l
				,SUM(IF((umur = 57) and jk='p',1,0)) AS u_57_p
				,SUM(IF((umur = 57)  AND (umur = 57) ,1,0)) AS u_57

				,SUM(IF((umur = 58) and jk='l',1,0)) AS u_58_l
				,SUM(IF((umur = 58) and jk='p',1,0)) AS u_58_p
				,SUM(IF((umur = 58)  AND (umur = 58) ,1,0)) AS u_58

				,SUM(IF((umur = 59) and jk='l',1,0)) AS u_59_l
				,SUM(IF((umur = 59) and jk='p',1,0)) AS u_59_p
				,SUM(IF((umur = 59)  AND (umur = 59) ,1,0)) AS u_59

				,SUM(IF((umur = 60) and jk='l',1,0)) AS u_60_l
				,SUM(IF((umur = 60) and jk='p',1,0)) AS u_60_p
				,SUM(IF((umur = 60)  AND (umur = 60) ,1,0)) AS u_60

				,SUM(IF((umur = 61) and jk='l',1,0)) AS u_61_l
				,SUM(IF((umur = 61) and jk='p',1,0)) AS u_61_p
				,SUM(IF((umur = 61)  AND (umur = 61) ,1,0)) AS u_61

				,SUM(IF((umur = 62) and jk='l',1,0)) AS u_62_l
				,SUM(IF((umur = 62) and jk='p',1,0)) AS u_62_p
				,SUM(IF((umur = 62)  AND (umur = 62) ,1,0)) AS u_62

				,SUM(IF((umur = 63) and jk='l',1,0)) AS u_63_l
				,SUM(IF((umur = 63) and jk='p',1,0)) AS u_63_p
				,SUM(IF((umur = 63)  AND (umur = 63) ,1,0)) AS u_63

				,SUM(IF((umur = 64) and jk='l',1,0)) AS u_64_l
				,SUM(IF((umur = 64) and jk='p',1,0)) AS u_64_p
				,SUM(IF((umur = 64)  AND (umur = 64) ,1,0)) AS u_64

				,SUM(IF((umur = 65) and jk='l',1,0)) AS u_65_l
				,SUM(IF((umur = 65) and jk='p',1,0)) AS u_65_p
				,SUM(IF((umur = 65)  AND (umur = 65) ,1,0)) AS u_65

				,SUM(IF((umur = 66) and jk='l',1,0)) AS u_66_l
				,SUM(IF((umur = 66) and jk='p',1,0)) AS u_66_p
				,SUM(IF((umur = 66)  AND (umur = 66) ,1,0)) AS u_66

				,SUM(IF((umur = 67) and jk='l',1,0)) AS u_67_l
				,SUM(IF((umur = 67) and jk='p',1,0)) AS u_67_p
				,SUM(IF((umur = 67)  AND (umur = 67) ,1,0)) AS u_67

				,SUM(IF((umur = 68) and jk='l',1,0)) AS u_68_l
				,SUM(IF((umur = 68) and jk='p',1,0)) AS u_68_p
				,SUM(IF((umur = 68)  AND (umur = 68) ,1,0)) AS u_68

				,SUM(IF((umur = 69) and jk='l',1,0)) AS u_69_l
				,SUM(IF((umur = 69) and jk='p',1,0)) AS u_69_p
				,SUM(IF((umur = 69)  AND (umur = 69) ,1,0)) AS u_69

				,SUM(IF((umur = 70) and jk='l',1,0)) AS u_70_l
				,SUM(IF((umur = 70) and jk='p',1,0)) AS u_70_p
				,SUM(IF((umur = 70)  AND (umur = 70) ,1,0)) AS u_70

				,SUM(IF((umur = 71) and jk='l',1,0)) AS u_71_l
				,SUM(IF((umur = 71) and jk='p',1,0)) AS u_71_p
				,SUM(IF((umur = 71)  AND (umur = 71) ,1,0)) AS u_71

				,SUM(IF((umur = 72) and jk='l',1,0)) AS u_72_l
				,SUM(IF((umur = 72) and jk='p',1,0)) AS u_72_p
				,SUM(IF((umur = 72)  AND (umur = 72) ,1,0)) AS u_72

				,SUM(IF((umur = 73) and jk='l',1,0)) AS u_73_l
				,SUM(IF((umur = 73) and jk='p',1,0)) AS u_73_p
				,SUM(IF((umur = 73)  AND (umur = 73) ,1,0)) AS u_73

				,SUM(IF((umur = 74) and jk='l',1,0)) AS u_74_l
				,SUM(IF((umur = 74) and jk='p',1,0)) AS u_74_p
				,SUM(IF((umur = 74)  AND (umur = 74) ,1,0)) AS u_74

				,SUM(IF((umur = 75) and jk='l',1,0)) AS u_75_l
				,SUM(IF((umur = 75) and jk='p',1,0)) AS u_75_p
				,SUM(IF((umur = 75)  AND (umur = 75) ,1,0)) AS u_75

				,SUM(IF(umur >75 AND jk='l' ,1,0)) AS u_b75_l
				,SUM(IF(umur >75 AND jk='p' ,1,0)) AS u_b75_p
				,SUM(IF(umur >75 ,1,0)) AS u_b75
				FROM v_penduduk2 p
				WHERE p.hidup_mati='1' AND status_kependudukan not in  ('3')";
			$res  = $this->db->query($sql);
			return $res;
	 }


	
	
}
