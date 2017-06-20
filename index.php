
<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h1>IZ Ipsum</h1>
<h2>Version 0.3.0</h2>

<?php
$number_to_display = 5;
$number_to_display_err = "";
$display_type = "Paragraphs";
$type_to_display = "";
$type_to_displayErr = "";

$words_per_paragraph = 150;

// Will need to work more on this (and add credit) - copied from https://en.wikipedia.org/wiki/Israel_Kamakawiwo%CA%BBole
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









function generate_paragraphs($numer_of_paragraphs, $ipsum_text) {

    $end_of_sentence_delimeter = '. ';

    $current_sentence = 0;
    $sentence_count = 0;
    $paragraph_count = 0;

    // Break the text into sentences, based on period (.)
    $sentences = explode($end_of_sentence_delimeter, $ipsum_text);
    $ipsum_text = "";
    $sentences_per_paragraph = 5;

    // For each paragraph, get the sentences to display
    // Paragraph and sentence numbers are in there for type_to_displaying and will be removed
    for ( $i = 0; $i < $numer_of_paragraphs; $i++ ) {
        if($i > 0) {
            $ipsum_text .= '<br><br>';
        }
        //$ipsum_text .= "<br>[Paragraph $i ]";

        for ( $j = 0; $j < $sentences_per_paragraph; $j++ ) {

            /**
             * Make sure there are sentences left before the end of the
             * array.  If there are, add it to the text to display
             */
            if ($current_sentence < count($sentences)) {
                $ipsum_text .= $sentences[$current_sentence] . ". ";
                $current_sentence++;
            }
            // If no sentences remain in array, start over from the beginning
            else {
                $current_sentence = 0;
                $ipsum_text .= $sentences[$current_sentence] . ". ";
                $current_sentence++;
            }
        }
        $paragraph_count++;

    }
    return $ipsum_text;
}


function generate_words($numer_of_words, $ipsum_text) {
    $ipsum_text = str_replace(array('.', ','), '' , $ipsum_text);
    $end_of_word_delimeter = ' ';
    $words = explode($end_of_word_delimeter, $ipsum_text);
    for ($k = 0; $k < $numer_of_words; $k++) {
        echo "$words[$k] ";
    }
}

function generate_lists($numer_of_lists, $ipsum_text) {

    $end_of_sentence_delimeter = '. ';

    $current_sentence = 0;
    $sentence_count = 0;
    $list_count = 0;

    // Break the text into sentences, based on period (.)
    $sentences = explode($end_of_sentence_delimeter, $ipsum_text);
    $ipsum_text = "";
    $sentences_per_paragraph = 5;

    // For each paragraph, get the sentences to display
    // Paragraph and sentence numbers are in there for type_to_displaying and will be removed
    for ( $i = 0; $i < $numer_of_lists; $i++ ) {
            $ipsum_text .= '<ul>';

            $sentences_per_paragraph = rand(3, 7);
        for ( $j = 0; $j < $sentences_per_paragraph; $j++ ) {

            /**
             * Make sure there are sentences left before the end of the
             * array.  If there are, add it to the text to display
             */
            if ($current_sentence < count($sentences)) {
                $ipsum_text .= "<li>$sentences[$current_sentence].</li>";
                $current_sentence++;
            }
            // If no sentences remain in array, start over from the beginning
            else {
                $current_sentence = 0;
                $ipsum_text .= $sentences[$current_sentence] . ". ";
                $current_sentence++;
            }
        }

        $ipsum_text .= '</ul>';
        $list_count++;

    }
    return $ipsum_text;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["number_to_display"])) {
    $number_to_display_err = "Number is required";
  } else {
    $number_to_display = sanitize_input($_POST["number_to_display"]);
    // check if number_to_display only contains numbers
    if ( ! is_numeric ($number_to_display) ) {
      $number_to_display_err = "Only numbers allowed";
    }
  }
  if (empty($_POST["type_to_display"])) {
    $type_to_displayErr = "Display is required";
  } else {
    $type_to_display = sanitize_input($_POST["type_to_display"]);
    if (isset($type_to_display) && $type_to_display=="paragraphs") {
        //echo generate_paragraphs ($number_to_display, $IZ_IPSUM_TEXT);
    }
    elseif (isset($type_to_display) && $type_to_display=="words") {
        //echo generate_words ($number_to_display, $IZ_IPSUM_TEXT);
    }
    elseif (isset($type_to_display) && $type_to_display=="lists") {
        //echo generate_words ($number_to_display, $IZ_IPSUM_TEXT);
    }
  }
  $display_type = sanitize_input($_POST["display_type"]);

}

  function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>


<p><span class="error">* required fields</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Number of Items to Display: <input type="text" name="number_to_display" value="<?php echo $number_to_display;?>">
  <span class="error">* <?php echo $number_to_display_err;?></span>
  <br>
  Display: <select id="display_type" name="display_type">
  <option value="Paragraphs"
    <?php if (isset($display_type) && $display_type=="Paragraphs") echo "selected ";?>>Paragraphs</option>
    <option value="Words"
      <?php if (isset($display_type) && $display_type=="Words") echo "selected ";?>>Words</option>
      <option value="Lists"
        <?php if (isset($display_type) && $display_type=="Lists") echo "selected ";?>>Lists</option>
</select>
  <span class="error">* <?php echo $type_to_displayErr;?></span>


  <br><br><input type="submit" name="submit" value="Generate IZ Ipsum">
</form>

<hr>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($display_type) && $display_type=="Paragraphs") {
          echo generate_paragraphs ($number_to_display, $IZ_IPSUM_TEXT);
    }
    elseif (isset($display_type) && $display_type=="Words") {
        echo generate_words ($number_to_display, $IZ_IPSUM_TEXT);
    }
    elseif (isset($display_type) && $display_type=="Lists") {
        echo generate_lists ($number_to_display, $IZ_IPSUM_TEXT);
    }
}


?>



</body>
</html>
