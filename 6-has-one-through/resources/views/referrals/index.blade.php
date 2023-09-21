@foreach ($referrals as $referral)
    <div>
        {{ $referral->id }} &mdash; {{ $referral->referralCode->code }} &bull; {{ $referral->user->name }}
    </div>
    <hr>
@endforeach
