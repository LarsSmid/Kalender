	<a id="cancel" style="position: absolute; margin-left: 600px; font-size: 30px; color: blue; font-family: Open Sans Condensed, sans-serif;" href="<?= URL ?>verjaardag/index">Annuleer</a>
	<div class="container">
	<h1>Edit</h1>

	<form action="<?= URL ?>verjaardag/editSave" method="post">
	
		<h2>Naam:</h2><input type="text" name="naam" value="<?= $mens['person']; ?>">
		<h2>Dag:</h2><select name="dag">
			<option value="1" <?php if ($mens['day'] == "1") { echo "selected=\"true\""; } ?>>1</option>
			<option value="2" <?php if ($mens['day'] == "2") { echo "selected=\"true\""; } ?>>2</option>
			<option value="3" <?php if ($mens['day'] == "3") { echo "selected=\"true\""; } ?>>3</option>
			<option value="4" <?php if ($mens['day'] == "4") { echo "selected=\"true\""; } ?>>4</option>
			<option value="5" <?php if ($mens['day'] == "5") { echo "selected=\"true\""; } ?>>5</option>
			<option value="6" <?php if ($mens['day'] == "6") { echo "selected=\"true\""; } ?>>6</option>
			<option value="7" <?php if ($mens['day'] == "7") { echo "selected=\"true\""; } ?>>7</option>
			<option value="8" <?php if ($mens['day'] == "8") { echo "selected=\"true\""; } ?>>8</option>
			<option value="9" <?php if ($mens['day'] == "9") { echo "selected=\"true\""; } ?>>9</option>
			<option value="10" <?php if ($mens['day'] == "10") { echo "selected=\"true\""; } ?>>10</option>
			<option value="11" <?php if ($mens['day'] == "11") { echo "selected=\"true\""; } ?>>11</option>
			<option value="12" <?php if ($mens['day'] == "12") { echo "selected=\"true\""; } ?>>12</option>
			<option value="13" <?php if ($mens['day'] == "13") { echo "selected=\"true\""; } ?>>13</option>
			<option value="14" <?php if ($mens['day'] == "14") { echo "selected=\"true\""; } ?>>14</option>
			<option value="15" <?php if ($mens['day'] == "15") { echo "selected=\"true\""; } ?>>15</option>
			<option value="16" <?php if ($mens['day'] == "16") { echo "selected=\"true\""; } ?>>16</option>
			<option value="17" <?php if ($mens['day'] == "17") { echo "selected=\"true\""; } ?>>17</option>
			<option value="18" <?php if ($mens['day'] == "18") { echo "selected=\"true\""; } ?>>18</option>
			<option value="19" <?php if ($mens['day'] == "19") { echo "selected=\"true\""; } ?>>19</option>
			<option value="20" <?php if ($mens['day'] == "20") { echo "selected=\"true\""; } ?>>20</option>
			<option value="21" <?php if ($mens['day'] == "21") { echo "selected=\"true\""; } ?>>21</option>
			<option value="22" <?php if ($mens['day'] == "22") { echo "selected=\"true\""; } ?>>22</option>
			<option value="23" <?php if ($mens['day'] == "23") { echo "selected=\"true\""; } ?>>23</option>
			<option value="24" <?php if ($mens['day'] == "24") { echo "selected=\"true\""; } ?>>24</option>
			<option value="25" <?php if ($mens['day'] == "25") { echo "selected=\"true\""; } ?>>25</option>
			<option value="26" <?php if ($mens['day'] == "26") { echo "selected=\"true\""; } ?>>26</option>
			<option value="27" <?php if ($mens['day'] == "27") { echo "selected=\"true\""; } ?>>27</option>
			<option value="28" <?php if ($mens['day'] == "28") { echo "selected=\"true\""; } ?>>28</option>
			<option value="29" <?php if ($mens['day'] == "29") { echo "selected=\"true\""; } ?>>29</option>
			<option value="30" <?php if ($mens['day'] == "30") { echo "selected=\"true\""; } ?>>30</option>
			<option value="31" <?php if ($mens['day'] == "31") { echo "selected=\"true\""; } ?>>31</option>
		</select>

		<h2 >Maand:</h2><select name="maand">
			<option value="1" <?php if ($mens['month_id'] == "1") { echo "selected=\"true\""; } ?>>Januari</option>
			<option value="2" <?php if ($mens['month_id'] == "2") { echo "selected=\"true\""; } ?>>Februari</option>
			<option value="3" <?php if ($mens['month_id'] == "3") { echo "selected=\"true\""; } ?>>Maart</option>
			<option value="4" <?php if ($mens['month_id'] == "4") { echo "selected=\"true\""; } ?>>April</option>
			<option value="5" <?php if ($mens['month_id'] == "5") { echo "selected=\"true\""; } ?>>Mei</option>
			<option value="6" <?php if ($mens['month_id'] == "6") { echo "selected=\"true\""; } ?>>Juni</option>
			<option value="7" <?php if ($mens['month_id'] == "7") { echo "selected=\"true\""; } ?>>Juli</option>
			<option value="8" <?php if ($mens['month_id'] == "8") { echo "selected=\"true\""; } ?>>Augustus</option>
			<option value="9" <?php if ($mens['month_id'] == "9") { echo "selected=\"true\""; } ?>>September</option>
			<option value="10" <?php if ($mens['month_id'] == "10") { echo "selected=\"true\""; } ?>>Oktober</option>
			<option value="11" <?php if ($mens['month_id'] == "11") { echo "selected=\"true\""; } ?>>November</option>
			<option value="12" <?php if ($mens['month_id'] == "12") { echo "selected=\"true\""; } ?>>December</option>
		</select>

		<h2 >Jaar:</h2><select name="jaar">
			<option value="2017" <?php if ($mens['year'] == "2017") { echo "selected=\"true\""; } ?>>2017</option>
			<option value="2016"<?php if ($mens['year'] == "2016") { echo "selected=\"true\""; } ?>>2016</option>
			<option value="2015"<?php if ($mens['year'] == "2015") { echo "selected=\"true\""; } ?>>2015</option>
			<option value="2014"<?php if ($mens['year'] == "2014") { echo "selected=\"true\""; } ?>>2014</option>
			<option value="2013"<?php if ($mens['year'] == "2013") { echo "selected=\"true\""; } ?>>2013</option>
			<option value="2012"<?php if ($mens['year'] == "2012") { echo "selected=\"true\""; } ?>>2012</option>
			<option value="2011"<?php if ($mens['year'] == "2011") { echo "selected=\"true\""; } ?>>2011</option>
			<option value="2010"<?php if ($mens['year'] == "2010") { echo "selected=\"true\""; } ?>>2010</option>
			<option value="2009"<?php if ($mens['year'] == "2009") { echo "selected=\"true\""; } ?>>2009</option>
			<option value="2008"<?php if ($mens['year'] == "2008") { echo "selected=\"true\""; } ?>>2008</option>
			<option value="2007"<?php if ($mens['year'] == "2007") { echo "selected=\"true\""; } ?>>2007</option>
			<option value="2006"<?php if ($mens['year'] == "2006") { echo "selected=\"true\""; } ?>>2006</option>
			<option value="2005"<?php if ($mens['year'] == "2005") { echo "selected=\"true\""; } ?>>2005</option>
			<option value="2004"<?php if ($mens['year'] == "2004") { echo "selected=\"true\""; } ?>>2004</option>
			<option value="2003"<?php if ($mens['year'] == "2003") { echo "selected=\"true\""; } ?>>2003</option>
			<option value="2002"<?php if ($mens['year'] == "2002") { echo "selected=\"true\""; } ?>>2002</option>
			<option value="2001"<?php if ($mens['year'] == "2001") { echo "selected=\"true\""; } ?>>2001</option>
			<option value="2000"<?php if ($mens['year'] == "2000") { echo "selected=\"true\""; } ?>>2000</option>
			<option value="1999"<?php if ($mens['year'] == "1999") { echo "selected=\"true\""; } ?>>1999</option>
			<option value="1998"<?php if ($mens['year'] == "1998") { echo "selected=\"true\""; } ?>>1998</option>
			<option value="1997"<?php if ($mens['year'] == "1997") { echo "selected=\"true\""; } ?>>1997</option>
			<option value="1996"<?php if ($mens['year'] == "1996") { echo "selected=\"true\""; } ?>>1996</option>
			<option value="1995"<?php if ($mens['year'] == "1995") { echo "selected=\"true\""; } ?>>1995</option>
			<option value="1994"<?php if ($mens['year'] == "1994") { echo "selected=\"true\""; } ?>>1994</option>
			<option value="1993"<?php if ($mens['year'] == "1993") { echo "selected=\"true\""; } ?>>1993</option>
			<option value="1992"<?php if ($mens['year'] == "1992") { echo "selected=\"true\""; } ?>>1992</option>
			<option value="1991"<?php if ($mens['year'] == "1991") { echo "selected=\"true\""; } ?>>1991</option>
			<option value="1990"<?php if ($mens['year'] == "1990") { echo "selected=\"true\""; } ?>>1990</option>
			<option value="1989"<?php if ($mens['year'] == "1989") { echo "selected=\"true\""; } ?>>1989</option>
			<option value="1988"<?php if ($mens['year'] == "1988") { echo "selected=\"true\""; } ?>>1988</option>
			<option value="1987"<?php if ($mens['year'] == "1987") { echo "selected=\"true\""; } ?>>1987</option>
			<option value="1986"<?php if ($mens['year'] == "1986") { echo "selected=\"true\""; } ?>>1986</option>
			<option value="1985"<?php if ($mens['year'] == "1985") { echo "selected=\"true\""; } ?>>1985</option>
			<option value="1984"<?php if ($mens['year'] == "1984") { echo "selected=\"true\""; } ?>>1984</option>
			<option value="1983"<?php if ($mens['year'] == "1983") { echo "selected=\"true\""; } ?>>1983</option>
			<option value="1982"<?php if ($mens['year'] == "1982") { echo "selected=\"true\""; } ?>>1982</option>
			<option value="1981"<?php if ($mens['year'] == "1981") { echo "selected=\"true\""; } ?>>1981</option>
			<option value="1980"<?php if ($mens['year'] == "1980") { echo "selected=\"true\""; } ?>>1980</option>
			<option value="1979"<?php if ($mens['year'] == "1979") { echo "selected=\"true\""; } ?>>1979</option>
			<option value="1978"<?php if ($mens['year'] == "1978") { echo "selected=\"true\""; } ?>>1978</option>
			<option value="1977"<?php if ($mens['year'] == "1977") { echo "selected=\"true\""; } ?>>1977</option>
			<option value="1976"<?php if ($mens['year'] == "1976") { echo "selected=\"true\""; } ?>>1976</option>
			<option value="1975"<?php if ($mens['year'] == "1975") { echo "selected=\"true\""; } ?>>1975</option>
			<option value="1974"<?php if ($mens['year'] == "1974") { echo "selected=\"true\""; } ?>>1974</option>
			<option value="1973"<?php if ($mens['year'] == "1973") { echo "selected=\"true\""; } ?>>1973</option>
			<option value="1972"<?php if ($mens['year'] == "1972") { echo "selected=\"true\""; } ?>>1972</option>
			<option value="1971"<?php if ($mens['year'] == "1971") { echo "selected=\"true\""; } ?>>1971</option>
			<option value="1970"<?php if ($mens['year'] == "1970") { echo "selected=\"true\""; } ?>>1970</option>
			<option value="1969"<?php if ($mens['year'] == "1969") { echo "selected=\"true\""; } ?>>1969</option>
			<option value="1968"<?php if ($mens['year'] == "1968") { echo "selected=\"true\""; } ?>>1968</option>
			<option value="1967"<?php if ($mens['year'] == "1967") { echo "selected=\"true\""; } ?>>1967</option>
			<option value="1966"<?php if ($mens['year'] == "1966") { echo "selected=\"true\""; } ?>>1966</option>
			<option value="1965"<?php if ($mens['year'] == "1965") { echo "selected=\"true\""; } ?>>1965</option>
			<option value="1964"<?php if ($mens['year'] == "1964") { echo "selected=\"true\""; } ?>>1964</option>
			<option value="1963"<?php if ($mens['year'] == "1963") { echo "selected=\"true\""; } ?>>1963</option>
			<option value="1962"<?php if ($mens['year'] == "1962") { echo "selected=\"true\""; } ?>>1962</option>
			<option value="1961"<?php if ($mens['year'] == "1961") { echo "selected=\"true\""; } ?>>1961</option>
			<option value="1960"<?php if ($mens['year'] == "1960") { echo "selected=\"true\""; } ?>>1960</option>
			<option value="1959"<?php if ($mens['year'] == "1959") { echo "selected=\"true\""; } ?>>1959</option>
			<option value="1958"<?php if ($mens['year'] == "1958") { echo "selected=\"true\""; } ?>>1958</option>
			<option value="1957"<?php if ($mens['year'] == "1957") { echo "selected=\"true\""; } ?>>1957</option>
			<option value="1956"<?php if ($mens['year'] == "1956") { echo "selected=\"true\""; } ?>>1956</option>
			<option value="1955"<?php if ($mens['year'] == "1955") { echo "selected=\"true\""; } ?>>1955</option>
			<option value="1954"<?php if ($mens['year'] == "1954") { echo "selected=\"true\""; } ?>>1954</option>
			<option value="1953"<?php if ($mens['year'] == "1953") { echo "selected=\"true\""; } ?>>1953</option>
			<option value="1952"<?php if ($mens['year'] == "1952") { echo "selected=\"true\""; } ?>>1952</option>
			<option value="1951"<?php if ($mens['year'] == "1951") { echo "selected=\"true\""; } ?>>1951</option>
			<option value="1950"<?php if ($mens['year'] == "1950") { echo "selected=\"true\""; } ?>>1950</option>
			<option value="1949"<?php if ($mens['year'] == "1949") { echo "selected=\"true\""; } ?>>1949</option>
			<option value="1948"<?php if ($mens['year'] == "1948") { echo "selected=\"true\""; } ?>>1948</option>
			<option value="1947"<?php if ($mens['year'] == "1947") { echo "selected=\"true\""; } ?>>1947</option>
			<option value="1946"<?php if ($mens['year'] == "1946") { echo "selected=\"true\""; } ?>>1946</option>
			<option value="1945"<?php if ($mens['year'] == "1945") { echo "selected=\"true\""; } ?>>1945</option>
			<option value="1944"<?php if ($mens['year'] == "1944") { echo "selected=\"true\""; } ?>>1944</option>
			<option value="1943"<?php if ($mens['year'] == "1943") { echo "selected=\"true\""; } ?>>1943</option>
			<option value="1942"<?php if ($mens['year'] == "1942") { echo "selected=\"true\""; } ?>>1942</option>
			<option value="1941"<?php if ($mens['year'] == "1941") { echo "selected=\"true\""; } ?>>1941</option>
			<option value="1940"<?php if ($mens['year'] == "1940") { echo "selected=\"true\""; } ?>>1940</option>
			<option value="1939"<?php if ($mens['year'] == "1939") { echo "selected=\"true\""; } ?>>1939</option>
			<option value="1938"<?php if ($mens['year'] == "1938") { echo "selected=\"true\""; } ?>>1938</option>
			<option value="1937"<?php if ($mens['year'] == "1937") { echo "selected=\"true\""; } ?>>1937</option>
			<option value="1936"<?php if ($mens['year'] == "1936") { echo "selected=\"true\""; } ?>>1936</option>
			<option value="1935"<?php if ($mens['year'] == "1935") { echo "selected=\"true\""; } ?>>1935</option>
			<option value="1934"<?php if ($mens['year'] == "1934") { echo "selected=\"true\""; } ?>>1934</option>
			<option value="1933"<?php if ($mens['year'] == "1933") { echo "selected=\"true\""; } ?>>1933</option>
			<option value="1932"<?php if ($mens['year'] == "1932") { echo "selected=\"true\""; } ?>>1932</option>
			<option value="1931"<?php if ($mens['year'] == "1931") { echo "selected=\"true\""; } ?>>1931</option>
			<option value="1930"<?php if ($mens['year'] == "1930") { echo "selected=\"true\""; } ?>>1930</option>
			<option value="1929"<?php if ($mens['year'] == "1929") { echo "selected=\"true\""; } ?>>1929</option>
			<option value="1928"<?php if ($mens['year'] == "1928") { echo "selected=\"true\""; } ?>>1928</option>
			<option value="1927"<?php if ($mens['year'] == "1927") { echo "selected=\"true\""; } ?>>1927</option>
			<option value="1926"<?php if ($mens['year'] == "1926") { echo "selected=\"true\""; } ?>>1926</option>
			<option value="1925"<?php if ($mens['year'] == "1925") { echo "selected=\"true\""; } ?>>1925</option>
			<option value="1924"<?php if ($mens['year'] == "1924") { echo "selected=\"true\""; } ?>>1924</option>
			<option value="1923"<?php if ($mens['year'] == "1923") { echo "selected=\"true\""; } ?>>1923</option>
			<option value="1922"<?php if ($mens['year'] == "1922") { echo "selected=\"true\""; } ?>>1922</option>
			<option value="1921"<?php if ($mens['year'] == "1921") { echo "selected=\"true\""; } ?>>1921</option>
			<option value="1920"<?php if ($mens['year'] == "1920") { echo "selected=\"true\""; } ?>>1920</option>
			<option value="1919"<?php if ($mens['year'] == "1919") { echo "selected=\"true\""; } ?>>1919</option>
			<option value="1918"<?php if ($mens['year'] == "1918") { echo "selected=\"true\""; } ?>>1918</option>
			<option value="1917"<?php if ($mens['year'] == "1917") { echo "selected=\"true\""; } ?>>1917</option>
			<option value="1916"<?php if ($mens['year'] == "1916") { echo "selected=\"true\""; } ?>>1916</option>
			<option value="1915"<?php if ($mens['year'] == "1915") { echo "selected=\"true\""; } ?>>1915</option>
			<option value="1914"<?php if ($mens['year'] == "1914") { echo "selected=\"true\""; } ?>>1914</option>
			<option value="1913"<?php if ($mens['year'] == "1913") { echo "selected=\"true\""; } ?>>1913</option>
			<option value="1912"<?php if ($mens['year'] == "1912") { echo "selected=\"true\""; } ?>>1912</option>
			<option value="1911"<?php if ($mens['year'] == "1911") { echo "selected=\"true\""; } ?>>1911</option>
			<option value="1910"<?php if ($mens['year'] == "1910") { echo "selected=\"true\""; } ?>>1910</option>
			<option value="1909"<?php if ($mens['year'] == "1909") { echo "selected=\"true\""; } ?>>1909</option>
			<option value="1908"<?php if ($mens['year'] == "1908") { echo "selected=\"true\""; } ?>>1908</option>
			<option value="1907"<?php if ($mens['year'] == "1907") { echo "selected=\"true\""; } ?>>1907</option>
			<option value="1906"<?php if ($mens['year'] == "1906") { echo "selected=\"true\""; } ?>>1906</option>
			<option value="1905"<?php if ($mens['year'] == "1905") { echo "selected=\"true\""; } ?>>1905</option>
		</select>
		<input type="hidden" name="id" value="<?= $mens['id']; ?>"><br><br>
		<input type="submit" value="Veranderen">
	
	</form>

</div>
