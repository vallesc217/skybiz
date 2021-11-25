<?php
/* * *******************************************************************************
 * The content of this file is subject to the ITS4YouInstaller license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouInstaller_Requirements_Model extends Vtiger_Base_Model
{
    protected $filePermissions = array(
        'cache' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'cron/modules' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'cron/language' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'languages' => array(
            'type' => 'Folder',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'layouts' => array(
            'type' => 'Folder',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'logs' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'modules' => array(
            'type' => 'Folder',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'storage' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test/logo' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test/templates_c' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test/upload' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test/user' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'test/vtlib' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'user_privileges' => array(
            'type' => 'Folder',
            'recommended' => 'yes',
        ),
        'config.inc.php' => array(
            'type' => 'File',
            'recommended' => 'yes',
        ),
        'parent_tabdata.php' => array(
            'type' => 'File',
            'recommended' => 'yes',
        ),
        'tabdata.php' => array(
            'type' => 'File',
            'recommended' => 'yes',
        ),
        'user_privileges/default_module_view.php' => array(
            'type' => 'File',
            'recommended' => 'yes',
        ),
        'user_privileges/enable_backup.php' => array(
            'type' => 'File',
            'recommended' => 'yes',
        ),
    );

    protected $phpRequirements = array(
        'max_execution_time' => array(
            'type' => 'Number',
            'minimum' => '60',
            'recommended' => '600',
        ),
        'max_input_time' => array(
            'type' => 'Number',
            'minimum' => '60',
            'recommended' => '120',
        ),
        'max_input_vars' => array(
            'type' => 'Number',
            'minimum' => '10000',
            'recommended' => '10000',
        ),
        'memory_limit' => array(
            'type' => 'Memory',
            'minimum' => '64M',
            'recommended' => '256M',
        ),
        'post_max_size' => array(
            'type' => 'Memory',
            'minimum' => '12M',
            'recommended' => '50M',
        ),
        'upload_max_filesize' => array(
            'type' => 'Memory',
            'minimum' => '2M',
            'recommended' => '5M',
        ),
        'SimpleXML' => array(
            'type' => 'Extension',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'gd' => array(
            'type' => 'Extension',
            'recommended' => 'yes',
            'minimum' => 'yes',
        ),
        'curl' => array(
            'type' => 'Extension',
            'recommended' => 'yes',
            'minimum' => 'yes',
        ),
        'imap' => array(
            'type' => 'Extension',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'mysql' => array(
            'type' => 'Mysql',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'mbstring' => array(
            'type' => 'Extension',
            'info' => 'LBL_REQUIRED_PDFMAKER',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
        'bcmath' => array(
            'type' => 'Extension',
            'minimum' => 'yes',
            'recommended' => 'yes',
        ),
    );

    protected $dbRequirements = array(
        'DieOnError' => array(
            'type' => 'DieOnError',
            'minimum' => 'no',
            'recommended' => 'no',
        ),
        'MysqlStrictMode' => array(
            'type' => 'MysqlStrictMode',
            'minimum' => 'no',
            'recommended' => 'no',
        ),
        'SqlMode' => array(
            'type' => 'SqlMode',
            'minimum' => 'yes',
            'recommended' => 'no',
            'recommended_description' => 'LBL_EMPTY_OR_NO_ENGINE_SUBSTITUTION',
        ),
        'SqlCharset' => array(
            'type' => 'SqlCharset',
            'minimum' => 'utf8_general_ci',
            'recommended' => 'utf8_general_ci',
            'recommended_description' => 'LBL_CHARSET_DATABASE_TABLE_COLUMN',
        ),
    );

    protected $userRequirements = array(
        'invalid_id' => array(
            'minimum' => '0',
            'recommended' => '0',
        ),
        'invalid_role' => array(
            'minimum' => '0',
            'recommended' => '0',
        ),
        'sharing_file' => array(
            'minimum' => '0',
            'recommended' => '0',
        ),
        'user_file' => array(
            'minimum' => '0',
            'recommended' => '0',
        )
    );
    protected $buttonType = 'success';
    protected $sqlCharset = false;

    /**
     * @return self
     */
    public static function getInstance()
    {
        $self = new self();
        $self->retrievePHPSettings();
        $self->retrieveDBSettings();
        $self->retrieveFilePermissions();
        $self->retrieveUserSettings();

        return $self;
    }

    public function retrievePHPSettings()
    {
        foreach ($this->getPHPSettings() as $key => $data) {
            $data['name'] = $key;
            $data['current'] = $this->getValue($data);
            $data['error'] = $this->isPHPError($data);
            $data['warning'] = $this->isPHPWarning($data);

            $this->setButtonType($data);
            $this->setPHPSettings($key, $data);
        }
    }

    /**
     * @return array
     */
    public function getPHPSettings()
    {
        return $this->phpRequirements;
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValue($data)
    {
        $function = sprintf('getValue%s', $data['type']);

        if (method_exists($this, $function)) {
            return $this->$function($data);
        }

        return ini_get($data['name']);
    }

    /**
     * @param array $data
     * @return string
     */
    public function isError($data)
    {
        $function = sprintf('isError%s', $data['type']);

        if (method_exists($this, $function)) {
            return $this->$function($data);
        }

        return $this->isPHPError($data);
    }

    /**
     * @param array $data
     * @return string
     */
    public function isWarning($data)
    {
        $function = sprintf('isWarning%s', $data['type']);

        if (method_exists($this, $function)) {
            return $this->$function($data);
        }

        return $this->isPHPWarning($data);
    }

    /**
     * @param array $data
     * @return string
     */
    public function isPHPError($data)
    {
        if ($this->isUnlimited($data)) {
            return 'no';
        }

        return $this->isLessThan($data['current'], $data['minimum'], $data['type']);
    }

    /**
     * @param string $val1
     * @param string $val2
     * @param string $type
     * @return string
     */
    public function isLessThan($val1, $val2, $type)
    {
        if ('Number' === $type) {
            $result = $val1 < $val2;
        } elseif ('Memory' === $type) {
            $val1 = $this->toBytes($val1);
            $val2 = $this->toBytes($val2);

            $result = $val1 < $val2;
        } elseif (!empty($val2)) {
            $result = $val1 !== $val2;
        } else {
            $result = false;
        }

        return $result ? 'yes' : 'no';
    }

    /**
     * @param string $str
     * @return int
     */
    public function toBytes($str)
    {
        $val = trim($str);
        $last = strtolower($str[strlen($str) - 1]);
        switch ($last) {
            case 'g':
                $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }
        return $val;
    }

    public function isUnlimited($data)
    {
        return 'Number' === $data['type'] && 0 >= $data['current'];
    }

    /**
     * @param array $data
     * @return string
     */
    public function isPHPWarning($data)
    {
        if ($this->isUnlimited($data)) {
            return 'no';
        }

        return $this->isLessThan($data['current'], $data['recommended'], $data['type']);
    }

    /**
     * @param string $key
     * @param array $data
     */
    public function setPHPSettings($key, $data)
    {
        $this->phpRequirements[$key] = $data;
    }

    public function retrieveDBSettings()
    {
        foreach ($this->getDBSettings() as $key => $data) {
            $data['name'] = $key;
            $data['current'] = $this->getValue($data);
            $data['error'] = $this->isError($data);
            $data['warning'] = $this->isWarning($data);

            $this->setButtonType($data);
            $this->setDBSettings($key, $data);
        }
    }

    /**
     * @return array
     */
    public function getDBSettings()
    {
        return $this->dbRequirements;
    }

    /**
     * @param string $key
     * @param array $data
     */
    public function setDBSettings($key, $data)
    {
        $this->dbRequirements[$key] = $data;
    }

    public function retrieveFilePermissions()
    {
        foreach ($this->getFilePermissions() as $name => $data) {
            $data['name'] = $name;
            $data['current'] = $this->getValue($data);
            $data['error'] = $this->isFileError($data);
            $data['warning'] = $this->isFileWarning($data);

            $this->setButtonType($data);
            $this->setFilePermission($name, $data);
        }
    }

    /**
     * @return array
     */
    public function getFilePermissions()
    {
        return $this->filePermissions;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function isFileError($data)
    {
        if (isset($data['minimum'])) {
            return $this->isLessThan($data['current'], $data['minimum'], $data['type']);
        }

        return 'no';
    }

    /**
     * @param array $data
     * @return string
     */
    public function isFileWarning($data)
    {
        if (isset($data['recommended'])) {
            return $this->isLessThan($data['current'], $data['recommended'], $data['type']);
        }

        return 'no';
    }

    /**
     * @param string $key
     * @param array $data
     */
    public function setFilePermission($key, $data)
    {
        $this->filePermissions[$key] = $data;
    }

    public function retrieveUserSettings()
    {
        $usersData = $this->getValueUsers();

        foreach ($this->getUserSettings() as $key => $data) {
            $value = $usersData[$key];
            $data['name'] = $key;
            $data['current'] = $value ? $value : '0';
            $data['error'] = $value > 0 ? 'yes' : 'no';

            $this->setButtonType($data);
            $this->setUserSettings($key, $data);
        }
    }

    /**
     * @return array
     */
    public function getValueUsers()
    {
        $adb = PearDatabase::getInstance();
        $result = $adb->pquery('SELECT id,roleid FROM vtiger_users LEFT JOIN vtiger_user2role ON vtiger_user2role.userid=vtiger_users.id WHERE status=?', ['Active']);
        $data = array(
            'invalid_id' => 0,
            'invalid_role' => 0,
            'sharing_file' => 0,
            'user_file' => 0,
        );

        while ($row = $adb->fetchByAssoc($result)) {
            $userId = $row['id'];
            $userFile = 'user_privileges/user_privileges_' . $userId . '.php';
            $sharingFile = 'user_privileges/sharing_privileges_' . $userId . '.php';

            if (empty($row['roleid'])) {
                $data['invalid_role']++;
            }
            if (!is_file($sharingFile)) {
                $data['sharing_file']++;
            }
            if (!is_file($userFile)) {
                $data['user_file']++;
            } else {
                require $userFile;

                if (isset($user_info) && $user_info['id'] != $userId) {
                    $data['invalid_id']++;
                }
            }
        }

        return $data;
    }

    /**
     * @return array
     */
    public function getUserSettings()
    {
        return $this->userRequirements;
    }

    /**
     * @param string $key
     * @param array $data
     */
    public function setUserSettings($key, $data)
    {
        $this->userRequirements[$key] = $data;
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValueExtension($data)
    {
        $extensions = get_loaded_extensions();

        return in_array($data['name'], $extensions) ? 'yes' : 'no';
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValueMysql($data)
    {
        $extensions = get_loaded_extensions();

        return (in_array('mysql', $extensions) || in_array('mysqli', $extensions)) ? 'yes' : 'no';
    }

    /**
     * @return string
     */
    public function getButtonType()
    {
        return $this->buttonType;
    }

    /**
     * @param array $data
     */
    public function setButtonType($data)
    {
        if ('yes' === $data['error']) {
            $this->buttonType = 'danger';
        } elseif ('danger' !== $this->buttonType && 'yes' === $data['warning']) {
            $this->buttonType = 'warning';
        }
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValueFolder($data)
    {
        return is_writable($data['name']) ? 'yes' : 'no';
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValueFile($data)
    {
        return is_writable($data['name']) ? 'yes' : 'no';
    }

    /**
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function getValueMysqlStrictMode($data)
    {
        return in_array('STRICT_TRANS_TABLES', $this->getSQLMode()) ? 'yes' : 'no';
    }

    protected $sqlMode;

    /**
     * @return array
     * @throws Exception
     */
    public function getSQLMode()
    {
        if (!$this->sqlMode) {
            $adb = PearDatabase::getInstance();
            $result = $adb->query('SELECT @@GLOBAL.sql_mode AS global, @@SESSION.sql_mode AS session');
            $row = $adb->query_result_rowdata($result);

            $this->sqlMode = array_unique(array_merge(
                explode(',', $row['global']),
                explode(',', $row['session'])
            ));
        }

        return $this->sqlMode;
    }

    /**
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function getValueSqlMode($data)
    {
        return implode(',', $this->getSQLMode());
    }

    /**
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function isErrorSqlMode($data)
    {
        $sqlMode = $this->getValueSqlMode($data);

        return !(empty($sqlMode) || 'NO_ENGINE_SUBSTITUTION' === $sqlMode) ? 'yes' : 'no';
    }

    /**
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function isWarningSqlMode($data)
    {
        return $this->isErrorSqlMode($data);
    }

    /**
     * @param array $data
     * @throws Exception
     */
    public function getValueSqlCharset($data)
    {
        return $this->getSqlCharset();
    }

    public function isErrorSqlCharset($data)
    {
        return false;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getSqlCharset()
    {
        if (!$this->sqlCharset) {
            $adb = PearDatabase::getInstance();
            $result = $adb->query('SELECT @@collation_database as charset');
            $row = $adb->query_result_rowdata($result);

            $this->sqlCharset = $row['charset'];
        }

        return $this->sqlCharset;
    }

    /**
     * @param array $data
     * @return string
     */
    public function getValueDieOnError($data)
    {
        return PearDatabase::getInstance()->dieOnError ? 'yes' : 'no';
    }
}
