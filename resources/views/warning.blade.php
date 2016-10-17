@extends('layouts.master')

@section('content')
	<div id="warning-top" class="top">
		<h1 class="top-text"> Warning! </h1>
	</div>
	<div class="page-tabs">
		<ul class="nav nav-tabs">
		  <li><a href="/">Home</a></li>
		  <li><a href="/prices">Prices</a></li>
		  <li class="active"><a href="/schedule">Scheduling</a></li>
		  <li><a href="/faq">FAQ</a></li>
		</ul>
	</div>
	<div id="scheduling-info">
		<h3>Contraindications</h3>
		<p>
			When you have any of these conditions, for the safety for yourself and the therapist, please do not book a massage:
		<p>
		<div class="list">
			<div>
				<ul>
					<li>Fever
					</li><li>Recent operations or acute injuries
					</li><li>Neuritis
					</li><li>Skin diseases
					</li><li>Severe Pain
					</li><li>Kidney Disease
					</li><li>History of Thrombosis
					</li><li>Tendon Ruptures 
					</li><li>Contagious diseases, including any cold or flu, no matter how mild it may seem
				</ul>
			</div>
			<div>
				<ul>
					</li><li>Muscle Ruptures 
					</li><li>Burns, Chilblains, and Broken Bones
					</li><li>Periostitis
					</li><li>Gout
					</li><li>Bursitis
					</li><li>Byositis Ossificans
					</li><li>Infections of the sking and soft tissue
					</li><li>Artificial Blood Vessels
					</li><li>Bleeding disorders such as Heamophillia
					</li><li>Under the influence of drugs or alcohol-including prescription pain medication
					</li>
				</ul>
				</div>
			</ul>
		</div>
		<hr>
		<h3>Local Contraindications</h3>
		<p>
			I can massage but not over any areas affected by:
		</p>

		<div class="list">
			<ul>
				<div>
					<li>Varicose veins
					</li><li>Undiagnosed lumps or bumps
					</li><li>Pregnancy
					</li><li>Bruising
					</li><li>Cuts
					</li><li>Abrasions
					</li><li>Sunburn
				</div>
				<div>
					</li><li>Undiagnosed pain
					</li><li>Inflammation, including arthritis
					</li><li>Aneurism
					</li><li>Frostbite
					</li><li>Malignancy
					</li><li>Medical Contraindications
					</li><li>Acute flare-ups of inflammatory conditions such as rheumatoid arthritis
					</li>
				</div>
			</ul>
		</div>
		<hr>
		<h3>
			Consult a Phsycian
		</h3>
		<p>
			Massage can only be scheduled if approved in writing by your Physician.
		</p>
		<div class="list">
			<ul>
				<div>
					<li>Oedema
					</li><li>Psoriasis or eczem
					</li><li>High blood pressure
					</li><li>Osteoporosis
					</li><li>Cancer
					</li><li>Cardio-vascular conditions (thrombosis, phlebitis, hypertension, heart conditions)
					</li><li>Heart problems, angina, those with pacemakers
				</div>
				<div>
					</li><li>Nervous or psychotic conditions
					</li><li>Epilepsy
					</li><li>Respiratory Issues
					</li><li>Diabetes
					</li><li>Bell’s palsy, trapped or pinched nerves
					</li><li>Any condition already being treated by a medical practitioner
					</li><li>Gynecological infections
					</li>
				<div>
			</ul>
		</div>
	</div>
@stop


