<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emiten Entity.
 *
 * @property string $id
 * @property string $name
 * @property string $market_cap
 * @property string $stock_price
 * @property string $r2006
 * @property string $r2007
 * @property string $r2008
 * @property string $r2009
 * @property string $r2010
 * @property string $r2011
 * @property string $r2012
 * @property string $r2013
 * @property string $r2014
 * @property string $r2015
 * @property string $per
 * @property string $pbv
 * @property string $peg
 * @property string $valuation
 * @property string $close
 * @property string $open
 * @property string $high
 * @property string $low
 * @property string $bid
 * @property string $offer
 * @property string $prev_close
 * @property string $beta
 * @property string $div_yield
 * @property string $avg_vol
 * @property string $shares_outstanding
 * @property string $free_float
 * @property string $free_floatp
 * @property string $net_profit_margin
 * @property string $eps_growth
 * @property string $cfps
 * @property string $bvps
 * @property string $roa
 * @property string $roe
 * @property string $der
 */
class Emiten extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
