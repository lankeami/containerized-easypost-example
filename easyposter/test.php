<?php
#####################
# example of how to use EasyPost for tracking objects
# https://github.com/EasyPost/easypost-php
#####################

require_once("./easypost-php/lib/easypost.php");

$env = strtoupper(getenv('ENV'));
$api_key = getenv($env . '_API_KEY');
\EasyPost\EasyPost::setApiKey($api_key);

function track_create($id, $carrier = 'ups') {
  $tracker = \EasyPost\Tracker::create(array('tracking_code' => $id, 'carrier' => $carrier));
}

function track($id, $carrier = 'ups') {
  global $env, $api_key;
  track_create($id, $carrier);
  $tracker = \EasyPost\Tracker::retrieve($id, $api_key);
  #var_dump(json_decode($tracker->__toString()));
  #var_dump($tracker->__toString());
  $details = $tracker->__get('tracking_details');
  $last_detail = $details[count($details) - 1];
  print "\"$id\",\"" . $last_detail['source'] . "\",\"" . $last_detail['status'] . "\",\"" . $last_detail['message'] . "\"\n";

  ## use the top level details on the package
  #print "tracking id: $id, carrier: " . $tracker->__get('carrier') . ", status: " . $tracker->__get('status') . "\n";
}

function main() {
  global $env, $api_key;

  print '"tracking id","carrier","status","message"' . "\n";

  if($env == 'DEV') {
    #print "QA: EZ1000000001\n";
    track("EZ1000000001");

  } else if($env == 'PROD') {
    print "please update easyposter/test.php\n";
  }

}

main();

?>
