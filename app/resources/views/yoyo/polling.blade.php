@php
$timezone = $timezone ?? 'Europe/Vienna';
date_default_timezone_set($timezone);
$time = date('h:i:s a',time());
@endphp

<div class="space-x-2" hx-include="*">
  
  <div yoyo:get="polling" yoyo:on="every 5s" 
    class="inline-block font-bold bg-teal-600 text-white px-4 py-2.5 leading-5 rounded"
  >
    The time is {{ $time }}
  </div>

  <select class="form-select" yoyo:get="polling" name="timezone">
    <option value="US/Pacific" {{ $timezone == 'US/Pacific' ? 'selected' : '' }}>US/Pacific</option>
    <option value="America/Buenos_Aires" {{ $timezone == 'America/Buenos_Aires' ? 'selected' : ''}}>America/Buenos_Aires</option>
    <option value="Europe/Vienna" {{ $timezone == 'Europe/Vienna' ? 'selected' : ''}}>Europe/Vienna</option>
    <option value="Asia/Hong_Kong" {{ $timezone == 'Asia/Hong_Kong' ? 'selected' : ''}}>Asia/Hong_Kong</option>
    <option value="Australia/Sydney" {{ $timezone == 'Australia/Sydney' ? 'selected' : ''}}>Australia/Sydney</option>
  </select>
</div>