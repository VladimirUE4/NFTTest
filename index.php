<?php
header('Content-Type: Application/json');

$ue4 = array();
$ue4["success"] = true;
$ue4["message"] = "Realtime";
$ue4["X"] = 4;
$ue4["Y"] = 12;
$ue4["Z"] = 5;
$ue4["link"] = "https://api.opensea.io/api/v1/assets?order_direction=desc&offset=0&limit=20";
$ue4["img1"] = "https://lh3.googleusercontent.com/cicgsdKoV7L_btWb2wPPhHfnccXvpg2Flz99PMrSQsqH4_fxxSmJXIZMAfEoZQMz3gVzIIfeS2dTSimZcKLvA_zAfW0Bbx7qacXsnQ=w286";
$ue4["img2"] = "https://lh3.googleusercontent.com/W0CrSi0T2cPBrfLcccD0vLDzvImiX2N2QfKjSViZcvtR-5b1ItWijV3C35ZTuuN2jLvmAhptkH8nUqF5HcttrhiHs77SlraHv9yuPw=w286";
$ue4["img3"] = "https://lh3.googleusercontent.com/8rnBY-yCKHSd0fSRAxPauLw82sr6LXPTjzEhjGBGdTujaa1ac_w0u4p6ULlyADe-NmKsCzD73AxLwVDBtzWv8gwYMY7JDrgWagGDIg=w286";
$ue4["img4"] = "https://lh3.googleusercontent.com/NSGIOmwsPKduQqTtWEVmi4piDFmew_HAh-xlEOhJQjhUxqTVjvhPCpBvdoXfTG7LcqjYHQDSoEilpul7vhLwBLcbPoU7wkD7euje=w286";
$ue4["img5"] = "https://lh3.googleusercontent.com/_b0y-gjDGeWdxt6-BgcEYKT52h7U-PnKRUZbYbgORNFutQCxkxivg7BavnfQs3YnJ4uCh8BEExUWXP5YMwTJfBAQAVfUcpEJ3DDTyA=w286";
$ue4["img6"] = "https://lh3.googleusercontent.com/ND5NSNgM_JycWimE-zyHUgCHeXDTE3Us5OaSo7TuTHRcJY42SOCTEAOhPdnSzXD1MirmmIOOcWHYX0MAufOHjVRppQ1zkqtbhTbKVOg=w286";
$ue4["img7"] = "https://lh3.googleusercontent.com/nd8dfctXT2_aXOMx0JzKFvz87edNDnaNK6aR5UmYg1xFC-jqVJdM0ku3OWQOd3EqXjWpQWp5w1Dk1NJEmWb30F95ISgFcEE9wdTViw=w286";
$ue4["img8"] = "https://lh3.googleusercontent.com/VQcEghwNg3XkEKS1J7AaNsObOfyL-rBsCUGrBaugxIHgzJedX-GmjwEtePZTvF0ARGSoJM9LLoGndYVhMdVJR-Q8xak4nrIPqj87Ew=w286";



echo json_encode($ue4);