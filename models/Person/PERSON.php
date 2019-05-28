<?php

namespace app\models\Person;

use Yii;

/**
 * This is the model class for table "PERSON".
 *
 * @property int $PERSON_ID
 * @property string $BIRTHDAY
 * @property string $BYCREATED
 * @property string $BYMODIFIED
 * @property string $DCREATE
 * @property string $DMODIFIED
 * @property string $FNAME
 * @property string $FNAME2
 * @property string $FNAME3
 * @property string $FNAME4
 * @property string $LNAME
 * @property string $LNAME2
 * @property string $LNAME3
 * @property string $LNAME4
 * @property string $LOGIN
 * @property string $MNAME
 * @property string $MNAME2
 * @property string $MNAME3
 * @property string $MNAME4
 * @property string $PINFL
 * @property int $ID_DIVISION
 * @property int $ID_ENTERPRISE
 *
 * @property BUSINESSTRIP $bUSINESSTRIP
 * @property BUSINESSTRIPCERTIFICATE $bUSINESSTRIPCERTIFICATE
 * @property BUSINESSTRIPSERVICEJOB $bUSINESSTRIPSERVICEJOB
 * @property BUSINESSTRIPWHO $bUSINESSTRIPWHO
 * @property CANDIDATE[] $cANDIDATEs
 * @property DIRECTORENTERPRISE[] $dIRECTORENTERPRISEs
 * @property AEMPLOYEES[] $aEMPLOYEESs
 * @property AUSERS $aUSERS
 * @property EMPLOYMENTHISTORY[] $eMPLOYMENTHISTORies
 * @property EMPLOYMENTHISTORYTEXT[] $eMPLOYMENTHISTORYTEXTs
 * @property ENTERPRISEPERSON[] $eNTERPRISEPeople
 * @property ENTERPRISEPERSON[] $eNTERPRISEPeople0
 * @property INCOMEBUSINESSTTRIPJOURNAL $iNCOMEBUSINESSTTRIPJOURNAL
 * @property INTERVIEWPERSON[] $iNTERVIEWPeople
 * @property LABORACTIVITY[] $lABORACTIVITies
 * @property OBYECTIVKA[] $oBYECTIVKAs
 * @property ORDER[] $oRDERs
 * @property ORDER[] $oRDERs0
 * @property DIVISION $dIVISION
 * @property ENTERPRISE $eNTERPRISE
 * @property PERSONLEAVE[] $pERSONLEAVEs
 * @property PERSONALAFFINITY[] $pERSONALAFFINITies
 * @property PERSONALCARD[] $pERSONALCARDs
 * @property PERSONALLANGUAGE[] $pERSONALLANGUAGEs
 * @property PERSONARCHIVE[] $pERSONARCHIVEs
 * @property PERSONBSOHIRING[] $pERSONBSOHIRINGs
 * @property PERSONCASES[] $pERSONCASESs
 * @property PERSONCHARACTERISTICS[] $pERSONCHARACTERISTICSs
 * @property PERSONCONTACT[] $pERSONCONTACTs
 * @property PERSONDIPLOMS[] $pERSONDIPLOMSs
 * @property PERSONDOCUMENT[] $pERSONDOCUMENTs
 * @property PERSONEDUCATION[] $pERSONEDUCATIONs
 * @property PERSONENCOURAGE[] $pERSONENCOURAGEs
 * @property PERSONEXPERIENCE[] $pERSONEXPERIENCEs
 * @property PERSONEXPERIENCE2[] $pERSONEXPERIENCE2s
 * @property PERSONFIREDREORGANIZATION[] $pERSONFIREDREORGANIZATIONs
 * @property PERSONFOTO[] $pERSONFOTOs
 * @property PERSONHIRING[] $pERSONHIRINGs
 * @property PERSONINTERVIEWS[] $pERSONINTERVIEWSs
 * @property PERSONMEMBERSHIP[] $pERSONMEMBERSHIPs
 * @property PERSONMILITARY[] $pERSONMILITARies
 * @property PERSONNELTRAINING $pERSONNELTRAINING
 * @property PERSONOBYECTIVCHANGESTATUS[] $pERSONOBYECTIVCHANGEStatuses
 * @property PERSONPARTYMEMBERSHIP[] $pERSONPARTYMEMBERSHIPs
 * @property PERSONPASSPORT[] $pERSONPASSPORTs
 * @property PERSONPENALTY[] $pERSONPENALTies
 * @property PERSONPROSPECTIVEPOSITION[] $pERSONPROSPECTIVEPOSITIONs
 * @property PERSONRESERVE[] $pERSONRESERVEs
 * @property PERSONSCIENTIFICLEVEL[] $pERSONSCIENTIFICLEVELs
 * @property PERSONSCIENTIFICRANK[] $pERSONSCIENTIFICRANKs
 * @property PERSONSOCIALBENEFITS[] $pERSONSOCIALBENEFITSs
 * @property PERSONSTATEAWARDS[] $pERSONSTATEAWARDSs
 * @property PERSONTESTING[] $pERSONTESTINGs
 * @property PERSONVALIDATION[] $pERSONVALIDATIONs
 * @property SPRAVKI[] $sPRAVKIs
 * @property TEMPORARYACCESSPERSON[] $tEMPORARYACCESSPeople
 * @property VACANCY[] $vACANCies
 * @property VALIDATIONCOMISSIONMEMBERS[] $vALIDATIONCOMISSIONMEMBERSs
 * @property VALIDATIONDATES[] $vALIDATIONDATESs
 * @property VALIDATIONPERSON[] $vALIDATIONPeople
 * @property VALIDATIONPERSONRATING[] $vALIDATIONPERSONRATINGs
 */
class PERSON extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PERSON';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BIRTHDAY', 'BYCREATED', 'BYMODIFIED', 'DCREATE', 'DMODIFIED', 'FNAME', 'FNAME2', 'FNAME3', 'FNAME4', 'LNAME', 'LNAME2', 'LNAME3', 'LNAME4', 'PINFL'], 'required'],
            [['BIRTHDAY', 'DCREATE', 'DMODIFIED'], 'safe'],
            [['ID_DIVISION', 'ID_ENTERPRISE'], 'integer'],
            [['BYCREATED', 'BYMODIFIED', 'FNAME', 'FNAME2', 'FNAME3', 'FNAME4', 'LNAME', 'LNAME2', 'LNAME3', 'LNAME4', 'LOGIN', 'MNAME', 'MNAME2', 'MNAME3', 'MNAME4', 'PINFL'], 'string', 'max' => 50],
            [['LNAME', 'FNAME', 'MNAME'], 'unique', 'targetAttribute' => ['LNAME', 'FNAME', 'MNAME']],
            [['LOGIN'], 'unique'],
            [['PINFL'], 'unique'],
            [['ID_DIVISION'], 'exist', 'skipOnError' => true, 'targetClass' => DIVISION::className(), 'targetAttribute' => ['ID_DIVISION' => 'ID_DIVISION']],
            [['ID_ENTERPRISE'], 'exist', 'skipOnError' => true, 'targetClass' => ENTERPRISE::className(), 'targetAttribute' => ['ID_ENTERPRISE' => 'ID_ENTERPRISE']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PERSON_ID' => Yii::t('app', 'Person ID'),
            'BIRTHDAY' => Yii::t('app', 'Birthday'),
            'BYCREATED' => Yii::t('app', 'Bycreated'),
            'BYMODIFIED' => Yii::t('app', 'Bymodified'),
            'DCREATE' => Yii::t('app', 'Dcreate'),
            'DMODIFIED' => Yii::t('app', 'Dmodified'),
            'FNAME' => Yii::t('app', 'Fname'),
            'FNAME2' => Yii::t('app', 'Fname2'),
            'FNAME3' => Yii::t('app', 'Fname3'),
            'FNAME4' => Yii::t('app', 'Fname4'),
            'LNAME' => Yii::t('app', 'Lname'),
            'LNAME2' => Yii::t('app', 'Lname2'),
            'LNAME3' => Yii::t('app', 'Lname3'),
            'LNAME4' => Yii::t('app', 'Lname4'),
            'LOGIN' => Yii::t('app', 'Login'),
            'MNAME' => Yii::t('app', 'Mname'),
            'MNAME2' => Yii::t('app', 'Mname2'),
            'MNAME3' => Yii::t('app', 'Mname3'),
            'MNAME4' => Yii::t('app', 'Mname4'),
            'PINFL' => Yii::t('app', 'Pinfl'),
            'ID_DIVISION' => Yii::t('app', 'Id Division'),
            'ID_ENTERPRISE' => Yii::t('app', 'Id Enterprise'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBUSINESSTRIP()
    {
        return $this->hasOne(BUSINESSTRIP::className(), ['ID_APPLICANT_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBUSINESSTRIPCERTIFICATE()
    {
        return $this->hasOne(BUSINESSTRIPCERTIFICATE::className(), ['ID_ISSUING_CERTIFICATE_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBUSINESSTRIPSERVICEJOB()
    {
        return $this->hasOne(BUSINESSTRIPSERVICEJOB::className(), ['ID_ASSERT_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBUSINESSTRIPWHO()
    {
        return $this->hasOne(BUSINESSTRIPWHO::className(), ['ID_WHO_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCANDIDATEs()
    {
        return $this->hasMany(CANDIDATE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDIRECTORENTERPRISEs()
    {
        return $this->hasMany(DIRECTORENTERPRISE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAEMPLOYEESs()
    {
        return $this->hasMany(AEMPLOYEES::className(), ['PERSON_ID' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAUSERS()
    {
        return $this->hasOne(AUSERS::className(), ['PERSON_ID' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEMPLOYMENTHISTORies()
    {
        return $this->hasMany(EMPLOYMENTHISTORY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEMPLOYMENTHISTORYTEXTs()
    {
        return $this->hasMany(EMPLOYMENTHISTORYTEXT::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getENTERPRISEPeople()
    {
        return $this->hasMany(ENTERPRISEPERSON::className(), ['ID_PERSONCURATOR' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getENTERPRISEPeople0()
    {
        return $this->hasMany(ENTERPRISEPERSON::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getINCOMEBUSINESSTTRIPJOURNAL()
    {
        return $this->hasOne(INCOMEBUSINESSTTRIPJOURNAL::className(), ['ID_WHO_INTERNAL_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getINTERVIEWPeople()
    {
        return $this->hasMany(INTERVIEWPERSON::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLABORACTIVITies()
    {
        return $this->hasMany(LABORACTIVITY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOBYECTIVKAs()
    {
        return $this->hasMany(OBYECTIVKA::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getORDERs()
    {
        return $this->hasMany(ORDER::className(), ['RESPONSIBLEPERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getORDERs0()
    {
        return $this->hasMany(ORDER::className(), ['PERSONAPPROVAL' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDIVISION()
    {
        return $this->hasOne(DIVISION::className(), ['ID_DIVISION' => 'ID_DIVISION']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getENTERPRISE()
    {
        return $this->hasOne(ENTERPRISE::className(), ['ID_ENTERPRISE' => 'ID_ENTERPRISE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONLEAVEs()
    {
        return $this->hasMany(PERSONLEAVE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONALAFFINITies()
    {
        return $this->hasMany(PERSONALAFFINITY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONALCARDs()
    {
        return $this->hasMany(PERSONALCARD::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONALLANGUAGEs()
    {
        return $this->hasMany(PERSONALLANGUAGE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONARCHIVEs()
    {
        return $this->hasMany(PERSONARCHIVE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONBSOHIRINGs()
    {
        return $this->hasMany(PERSONBSOHIRING::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONCASESs()
    {
        return $this->hasMany(PERSONCASES::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONCHARACTERISTICSs()
    {
        return $this->hasMany(PERSONCHARACTERISTICS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONCONTACTs()
    {
        return $this->hasMany(PERSONCONTACT::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONDIPLOMSs()
    {
        return $this->hasMany(PERSONDIPLOMS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONDOCUMENTs()
    {
        return $this->hasMany(PERSONDOCUMENT::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONEDUCATIONs()
    {
        return $this->hasMany(PERSONEDUCATION::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONENCOURAGEs()
    {
        return $this->hasMany(PERSONENCOURAGE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONEXPERIENCEs()
    {
        return $this->hasMany(PERSONEXPERIENCE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONEXPERIENCE2s()
    {
        return $this->hasMany(PERSONEXPERIENCE2::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONFIREDREORGANIZATIONs()
    {
        return $this->hasMany(PERSONFIREDREORGANIZATION::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONFOTOs()
    {
        return $this->hasMany(PERSONFOTO::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONHIRINGs()
    {
        return $this->hasMany(PERSONHIRING::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONINTERVIEWSs()
    {
        return $this->hasMany(PERSONINTERVIEWS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONMEMBERSHIPs()
    {
        return $this->hasMany(PERSONMEMBERSHIP::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONMILITARies()
    {
        return $this->hasMany(PERSONMILITARY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONNELTRAINING()
    {
        return $this->hasOne(PERSONNELTRAINING::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONOBYECTIVCHANGEStatuses()
    {
        return $this->hasMany(PERSONOBYECTIVCHANGESTATUS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONPARTYMEMBERSHIPs()
    {
        return $this->hasMany(PERSONPARTYMEMBERSHIP::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONPASSPORTs()
    {
        return $this->hasMany(PERSONPASSPORT::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONPENALTies()
    {
        return $this->hasMany(PERSONPENALTY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONPROSPECTIVEPOSITIONs()
    {
        return $this->hasMany(PERSONPROSPECTIVEPOSITION::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONRESERVEs()
    {
        return $this->hasMany(PERSONRESERVE::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONSCIENTIFICLEVELs()
    {
        return $this->hasMany(PERSONSCIENTIFICLEVEL::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONSCIENTIFICRANKs()
    {
        return $this->hasMany(PERSONSCIENTIFICRANK::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONSOCIALBENEFITSs()
    {
        return $this->hasMany(PERSONSOCIALBENEFITS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONSTATEAWARDSs()
    {
        return $this->hasMany(PERSONSTATEAWARDS::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONTESTINGs()
    {
        return $this->hasMany(PERSONTESTING::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERSONVALIDATIONs()
    {
        return $this->hasMany(PERSONVALIDATION::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSPRAVKIs()
    {
        return $this->hasMany(SPRAVKI::className(), ['PERSON_ID' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTEMPORARYACCESSPeople()
    {
        return $this->hasMany(TEMPORARYACCESSPERSON::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVACANCies()
    {
        return $this->hasMany(VACANCY::className(), ['ID_PERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVALIDATIONCOMISSIONMEMBERSs()
    {
        return $this->hasMany(VALIDATIONCOMISSIONMEMBERS::className(), ['IDPERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVALIDATIONDATESs()
    {
        return $this->hasMany(VALIDATIONDATES::className(), ['IDPERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVALIDATIONPeople()
    {
        return $this->hasMany(VALIDATIONPERSON::className(), ['IDPERSON' => 'PERSON_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVALIDATIONPERSONRATINGs()
    {
        return $this->hasMany(VALIDATIONPERSONRATING::className(), ['IDPERSON' => 'PERSON_ID']);
    }

    /**
     * {@inheritdoc}
     * @return PERSONQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PERSONQuery(get_called_class());
    }
}
