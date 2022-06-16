Ratings.php
<?php
Srating = new ratings($_POST['widget_id']); isset($_POST['fetch']) ? Srating->get ratings(): Srating->vote();
class ratings {
var $data_file = '/ratings.data.txt';
private Swidget_id; private $data = array():
function construct(Swid) {
$this->widget_id = Swid;
Sall-file_get_contents($this->data_file);
if($all) {
$this->data = unserialize($all):
public function get_ratings() {
if($this->data[$this->widget_id]) {
echo ison encode($this->datal $this->widget id):
else (
$data['widget_id'] Sthis->widget id, $data['number_votes']=0:
$data['total_points"] = 0; $data['dec_avg']=0;
$data['whole_avg'] = 0; echo json_encode($data);
public function vote() {
#Get the value of the vote
preg_match('/star ([1-5]{1})", $_POST['clicked on'], Smatch); Svote Smatch[1];
SID=$this.widget_id
#Update the record if it exists
if($this->data[SID]) {
$this->data[SID]['number_votes'] += 1;
$this->data[SID]['total_points'] += Svote;
#Create a new one if it doesn't
else (
$this->data[SID]['number_votes'] = 1;
$this->data[SID]['total points'] = $vote;
$this->data[SID]['dec_avg'] = round($this->data[SID]['total points']/$this >data[SID]['number_votes], 1); |
$this->data[SID]['whole_avg'] = round( $this->data[$ID]['dec_avg']);
file_put_contents($this->data file, serialize($this->data));
$this->get ratings():
#end class
]