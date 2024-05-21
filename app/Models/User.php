<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Traits\HasActivities;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasActivities;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referral_code',
        'external_id',
        'external_auth',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected $with = [
        'coins'
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
    
    public function homeHelps()
    {
        return $this->hasMany(HomeHelp::class);
    }

    public function adminlte_image(){

        return auth()->user()->profile_photo_url;
    }

    public function adminlte_profile_url(){

        return route('admin.profile.index');
    }
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /* Historial del usuario trait  */

    public function activities()
    {
        return $this->hasMany(UserActivity::class);
    }

    //imagen Relacion uno a muchos post
    public function posts(){
        return $this->hasMany(Post::class);
    }

    //imagen Relacion uno a muchos postYOUTUBE
    public function postyoutube(){
        return $this->hasMany(postyoutube::class);
    }

    public function pedidos(){
        return $this->hasMany(pedidos::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    
    //Relacion uno a muchos 
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function navbarconfing(){
        return $this->hasMany(navbarConfig::class);
    }

    public function provider(){
        return $this->hasMany(Provider::class);
    }

    /* coins */
    public function coins()
    {
        return $this->belongsToMany(Coin::class, 'user_coins')->withPivot('balance');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * Get the payments associated with the user.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    
    public function paymentMethods()
    {
        return $this->belongsToMany(PaymentMethod::class);
    }


    /* referidos y user parents  */
    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referring_user_id');
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by_user_id');
    }

    public function parents()
    {
        return $this->hasMany(UserParent::class, 'user_id');
    }

    public function children()
    {
        return $this->hasMany(UserParent::class, 'parent_id');
    }

    /* favoritos */

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    /* reseñas */

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    /* folowers  */

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }
    public function following()
    {
        return $this->hasMany(Follow::class, 'user_id');
    }

    public function isFollowedBy($user)
    {
        return $this->followers->contains('user_id', $user->id);
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'following_user_id');
    }

    /* bloqueo a usuario folowers */

    public function blockedFollows()
    {
        return $this->hasMany(BlockedFollow::class);
    }

    public function blockedBy()
    {
        return $this->hasMany(BlockedFollow::class, 'blocked_user_id');
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
   /*   public function address(){
        return $this->hasMany(Address::class);
    }
*/

    /* ######Historial recursos necesarios#### */
    public function histories()
    {
        return $this->hasMany(History::class);
    }

}
