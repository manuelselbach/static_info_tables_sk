<?php

declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Manuel Selbach <manuel_selbach@yahoo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * The Currency model
 *
 * @copyright Copyright belongs to the respective authors
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Currency extends AbstractEntity
{
    /**
     * name of the currency
     * @var string
     */
    protected $nameSk = '';

    /**
     * name of the currency subdivision unit
     * @var string
     */
    protected $subdivisionNameSk = '';

    /**
     * Sets the name of the currency
     *
     * @param string $nameSk
     *
     * @return void
     */
    public function setNameSk($nameSk)
    {
        $this->nameSk = $nameSk;
    }

    /**
     * Gets the name of the currency
     *
     * @return string
     */
    public function getNameSk()
    {
        return $this->nameSk;
    }

    /**
     * Sets the name of the currency subdivision
     *
     * @param string $subdivisionNameSk
     *
     * @return void
     */
    public function setSubdivisionNameSk($subdivisionNameSk)
    {
        $this->subdivisionNameSk = $subdivisionNameSk;
    }

    /**
     * Gets the name of the currency subdivision
     *
     * @return string
     */
    public function getSubdivisionNameSk()
    {
        return $this->subdivisionNameSk;
    }
}
