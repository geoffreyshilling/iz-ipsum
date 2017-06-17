
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h1>IZ Ipsum</h1>
<?php

$IZ_IPSUM_TEXT = "Israel &quot;Iz&quot; Ka&#39;ano&#39;i Kamakawiwo&#39;ole (Hawaiian pronunciation: [kəˌmɐkəˌvivoˈʔole]) translation: &quot;The Fearless Eyed&quot;; May 20, 1959 – June 26, 1997), also called Bruddah Iz (Brother Iz), was a Native Hawaiian musician, entertainer and Hawaiian sovereignty activist.

His voice became famous outside Hawaii when his album Facing Future was released in 1993. His medley of &quot;Somewhere Over the Rainbow/What a Wonderful World&quot; was subsequently featured in several films, television programs, and television commercials.

Along with his ukulele playing and incorporation of other genres, such as jazz and reggae, Kamakawiwo&#39;ole remains influential on Hawaiian music.[2]

Kamakawiwo&#39;ole was born at Kuakini Medical Center in Honolulu to Henry &quot;Hank&quot; Kaleialoha Naniwa Kamakawiwo&#39;ole, Jr. and Evangeline &quot;Angie&quot; Leinani Kamakawiwo&#39;ole. The notable Hawaiian musician Moe Keale was his uncle and a major musical influence. He was raised in the community of Kaimuki, where his parents had met and married. He began playing music with his older brother Skippy and cousin Allen Thornton at the age of 11, being exposed to the music of Hawaiian entertainers of the time such as Peter Moon, Palani Vaughn and Don Ho, who frequented the establishment where Kamakawiwo&#39;ole&#39;s parents worked. Hawaiian musician Del Beazley spoke of the first time he heard Israel perform, when, while playing for a graduation party, the whole room fell silent on hearing him sing.[3] Israel continued his path as his brother Skippy entered the Army in 1971 and cousin Allen parted ways in 1976 for the mainland.

In his early teens, he studied at Upward Bound (UB) of the University of Hawaii at Hilo and his family moved to Mākaha. There he met Louis Kauakahi, Sam Gray and Jerome Koko.[4] Together with his brother Skippy they formed the Makaha Sons of Ni&#39;ihau. A part of the Hawaiian Renaissance, the band&#39;s blend of contemporary and traditional styles gained in popularity as they toured Hawaii and the continental United States, releasing fifteen successful albums. Kamakawiwo&#39;ole&#39;s aim was to make music that stayed true to the typical sound of traditional Hawaiian music. During that time period, the songs that many people associated with Hawaii, typically, were not traditional-sounding songs.

The Makaha Sons of Ni&#39;ihau recorded No Kristo in 1976 and released four more albums, including Kahea O Keale, Keala, Makaha Sons of Ni&#39;ihau and Mahalo Ke Akua. In 1982, Kamakawiwo&#39;ole&#39;s brother, Skippy, died at age 28 of a heart attack[5] related to obesity. In that same year, Kamakawiwo&#39;ole married his childhood sweetheart Marlene. Soon after, they had a daughter whom they named Ceslieanne &quot;Wehi&quot; (born in c. 1983). The group became Hawaii&#39;s most popular contemporary traditional group with breakout albums 1984&#39;s Puana Hou Me Ke Aloha and its follow-up, 1986&#39;s Ho&#39;ola. Kamakawiwo&#39;ole&#39;s last recorded album with the group was 1991&#39;s Ho&#39;oluana. It remains the group&#39;s top-selling CD.

In 1990, Kamakawiwo&#39;ole released his first solo album Ka &#39;Ano&#39;i, which won awards for Contemporary Album of the Year and Male Vocalist of the Year from the Hawai&#39;i Academy of Recording Arts (HARA). Facing Future was released in 1993 by The Mountain Apple Company. It featured his most popular song, the medley &quot;Somewhere Over the Rainbow/What a Wonderful World&quot;, along with &quot;Hawai&#39;i 78&quot;, &quot;White Sandy Beach of Hawai&#39;i&quot;, &quot;Maui Hawaiian Sup&#39;pa Man&quot;, and &quot;Kaulana Kawaihae&quot;. The decision to include a cover of Somewhere Over the Rainbow was said to be a last-minute decision by his producer Jon de Mello and him.[6] Facing Future debuted at #25 on Billboard magazine&#39;s Top Pop Catalogue chart. On October 26, 2005, Facing Future became Hawaii&#39;s first certified platinum album, selling more than a million CDs in the United States, according to figures furnished by the Recording Industry Association of America.[7] On July 21, 2006, BBC Radio 1 announced that &quot;Somewhere Over the Rainbow/What a Wonderful World (True Dreams)&quot; would be released as a single in America.

In 1994, Kamakawiwo&#39;ole was voted favorite entertainer of the year by the Hawai&#39;i Academy of Recording Arts (HARA).

E Ala E (1995) featured the political title song &quot;&#39;E Ala &#39;E&quot; and &quot;Kaleohano&quot;, and N Dis Life (1996) featured &quot;In This Life&quot; and &quot;Starting All Over Again&quot;.

In 1997, Kamakawiwo&#39;ole was again honored by HARA at the Annual Nā Hōkū Hanohano awards for Male Vocalist of the Year, Favorite Entertainer of the Year, Album of the Year, and Island Contemporary Album of the Year. He watched the awards ceremony from a hospital room.

Alone in Iz World (2001) debuted at #1 on Billboard&#39;s World Chart and #135 on Billboard&#39;s Top 200, #13 on the Top Independent Albums Chart, and #15 on the Top Internet Album Sales charts.

Kamakawiwo&#39;ole&#39;s Facing Future has become the best-selling Hawaiian album of all time.[3]

Kamakawiwo&#39;ole was known for promoting Hawaiian rights and Hawaiian independence, both through his lyrics, which often stated the case for independence directly, and his life.[8] For example, the lyric in his song &quot;Hawai&#39;i &#39;78&quot;: &quot;The life of this land is the life of the people/and that to care for the land (malama &#39;āina) is to care for the Hawaiian culture&quot;, is a statement that many consider to summarise his Hawaiian ideals.[9] The state motto of Hawai&#39;i is a recurring line in the song and encompasses the meaning of Iz&#39;s message: &quot;Ua Mau ke Ea o ka &#39;Āina i ka Pono&quot; (proclaimed by King Kamehameha III when Hawai&#39;i regained sovereignty in 1843. It can be roughly translated as: &quot;The life of the land is perpetuated in righteousness&quot;).[10]

Kamakawiwo&#39;ole used the soprano ukulele, and his music as a whole, to promote awareness of his belief of a second-class status pushed onto the natives by the tourist industry.[11]";

$sentences_per_paragraph = 5;
$end_of_sentence_delimeter = ". ";

$newposit = 0;
$last_delimeter_found_position = 0;
$paragraph_start_position = 0;
$first_delimiter_position = stripos ($IZ_IPSUM_TEXT, $end_of_sentence_delimeter);

// If a delimiter is found in the text
if($first_delimiter_position) {


    for ( $j= 0; $j < 3; $j++) {
    $paragraph_text = "";
    
      for ($i = 0; $i < $sentences_per_paragraph; $i++ ) {
        $last_delimeter_found_position = (stripos ($IZ_IPSUM_TEXT, $end_of_sentence_delimeter, $last_delimeter_found_position)) + 1;
      }
      $paragraph_text = substr($IZ_IPSUM_TEXT, $paragraph_start_position, $last_delimeter_found_position);
      echo $paragraph_text . "<br><br>$paragraph_start_position $last_delimeter_found_position";

    }
}

// If no delimiter is found in the text
else {

}

?>

</body>
</html>
