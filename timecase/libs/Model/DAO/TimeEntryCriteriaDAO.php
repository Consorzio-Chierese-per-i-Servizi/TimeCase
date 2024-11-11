<?php
/** @package    Projects::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * TimeEntryCriteria allows custom querying for the TimeEntry object.
 *
 * @inheritdocs
 * @package Projects::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class TimeEntryCriteriaDAO extends Criteria
{

	public $Id_Equals;
	public $Id_NotEquals;
	public $Id_IsLike;
	public $Id_IsNotLike;
	public $Id_BeginsWith;
	public $Id_EndWith;
	public $Id_GreaterThan;
	public $Id_GreaterThanOrEqual;
	public $Id_LessThan;
	public $Id_LessThanOrEqual;
	public $Id_In;
	public $Id_IsNotEmpty;
	public $Id_IsEmpty;
	public $Id_BitwiseOr;
	public $Id_BitwiseAnd;
	public $ProjectId_Equals;
	public $ProjectId_NotEquals;
	public $ProjectId_IsLike;
	public $ProjectId_IsNotLike;
	public $ProjectId_BeginsWith;
	public $ProjectId_EndWith;
	public $ProjectId_GreaterThan;
	public $ProjectId_GreaterThanOrEqual;
	public $ProjectId_LessThan;
	public $ProjectId_LessThanOrEqual;
	public $ProjectId_In;
	public $ProjectId_IsNotEmpty;
	public $ProjectId_IsEmpty;
	public $ProjectId_BitwiseOr;
	public $ProjectId_BitwiseAnd;
	public $UserId_Equals;
	public $UserId_NotEquals;
	public $UserId_IsLike;
	public $UserId_IsNotLike;
	public $UserId_BeginsWith;
	public $UserId_EndWith;
	public $UserId_GreaterThan;
	public $UserId_GreaterThanOrEqual;
	public $UserId_LessThan;
	public $UserId_LessThanOrEqual;
	public $UserId_In;
	public $UserId_IsNotEmpty;
	public $UserId_IsEmpty;
	public $UserId_BitwiseOr;
	public $UserId_BitwiseAnd;
	public $CategoryId_Equals;
	public $CategoryId_NotEquals;
	public $CategoryId_IsLike;
	public $CategoryId_IsNotLike;
	public $CategoryId_BeginsWith;
	public $CategoryId_EndWith;
	public $CategoryId_GreaterThan;
	public $CategoryId_GreaterThanOrEqual;
	public $CategoryId_LessThan;
	public $CategoryId_LessThanOrEqual;
	public $CategoryId_In;
	public $CategoryId_IsNotEmpty;
	public $CategoryId_IsEmpty;
	public $CategoryId_BitwiseOr;
	public $CategoryId_BitwiseAnd;
	public $Start_Equals;
	public $Start_NotEquals;
	public $Start_IsLike;
	public $Start_IsNotLike;
	public $Start_BeginsWith;
	public $Start_EndWith;
	public $Start_GreaterThan;
	public $Start_GreaterThanOrEqual;
	public $Start_LessThan;
	public $Start_LessThanOrEqual;
	public $Start_In;
	public $Start_IsNotEmpty;
	public $Start_IsEmpty;
	public $Start_BitwiseOr;
	public $Start_BitwiseAnd;
	public $End_Equals;
	public $End_NotEquals;
	public $End_IsLike;
	public $End_IsNotLike;
	public $End_BeginsWith;
	public $End_EndWith;
	public $End_GreaterThan;
	public $End_GreaterThanOrEqual;
	public $End_LessThan;
	public $End_LessThanOrEqual;
	public $End_In;
	public $End_IsNotEmpty;
	public $End_IsEmpty;
	public $End_BitwiseOr;
	public $End_BitwiseAnd;
	public $Description_Equals;
	public $Description_NotEquals;
	public $Description_IsLike;
	public $Description_IsNotLike;
	public $Description_BeginsWith;
	public $Description_EndWith;
	public $Description_GreaterThan;
	public $Description_GreaterThanOrEqual;
	public $Description_LessThan;
	public $Description_LessThanOrEqual;
	public $Description_In;
	public $Description_IsNotEmpty;
	public $Description_IsEmpty;
	public $Description_BitwiseOr;
	public $Description_BitwiseAnd;
    public $Promoter_Equals;
    public $Promoter_NotEquals;
    public $Promoter_IsLike;
    public $Promoter_IsNotLike;
    public $Promoter_BeginsWith;
    public $Promoter_EndWith;
    public $Promoter_GreaterThan;
    public $Promoter_GreaterThanOrEqual;
    public $Promoter_LessThan;
    public $Promoter_LessThanOrEqual;
    public $Promoter_In;
    public $Promoter_IsNotEmpty;
    public $Promoter_IsEmpty;
    public $Promoter_BitwiseOr;
    public $Promoter_BitwiseAnd;
    public $Certificate_Equals;
    public $Certificate_NotEquals;
    public $Certificate_IsLike;
    public $Certificate_IsNotLike;
    public $Certificate_BeginsWith;
    public $Certificate_EndWith;
    public $Certificate_GreaterThan;
    public $Certificate_GreaterThanOrEqual;
    public $Certificate_LessThan;
    public $Certificate_LessThanOrEqual;
    public $Certificate_In;
    public $Certificate_IsNotEmpty;
    public $Certificate_IsEmpty;
    public $Certificate_BitwiseOr;
    public $Certificate_BitwiseAnd;
	public $Location_Equals;
	public $Location_NotEquals;
	public $Location_IsLike;
	public $Location_IsNotLike;
	public $Location_BeginsWith;
	public $Location_EndWith;
	public $Location_GreaterThan;
	public $Location_GreaterThanOrEqual;
	public $Location_LessThan;
	public $Location_LessThanOrEqual;
	public $Location_In;
	public $Location_IsNotEmpty;
	public $Location_IsEmpty;
	public $Location_BitwiseOr;
	public $Location_BitwiseAnd;
    public $ExplicitDuration_Equals;
    public $ExplicitDuration_NotEquals;
    public $ExplicitDuration_IsLike;
    public $ExplicitDuration_IsNotLike;
    public $ExplicitDuration_BeginsWith;
    public $ExplicitDuration_EndWith;
    public $ExplicitDuration_GreaterThan;
    public $ExplicitDuration_GreaterThanOrEqual;
    public $ExplicitDuration_LessThan;
    public $ExplicitDuration_LessThanOrEqual;
    public $ExplicitDuration_In;
    public $ExplicitDuration_IsNotEmpty;
    public $ExplicitDuration_IsEmpty;
    public $ExplicitDuration_BitwiseOr;
    public $ExplicitDuration_BitwiseAnd;

	public $Special;

}

