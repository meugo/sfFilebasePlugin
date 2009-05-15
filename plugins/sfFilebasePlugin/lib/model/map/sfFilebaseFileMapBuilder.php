<?php


/**
 * This class adds structure of 'sf_filebase_files' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu May 14 17:34:21 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfFilebasePlugin.lib.model.map
 */
class sfFilebaseFileMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfFilebasePlugin.lib.model.map.sfFilebaseFileMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(sfFilebaseFilePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(sfFilebaseFilePeer::TABLE_NAME);
		$tMap->setPhpName('sfFilebaseFile');
		$tMap->setClassname('sfFilebaseFile');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('PATHNAME', 'Pathname', 'VARCHAR', true, 255);

		$tMap->addColumn('HASH', 'Hash', 'VARCHAR', true, 255);

		$tMap->addForeignKey('SF_FILEBASE_DIRECTORIES_ID', 'SfFilebaseDirectoriesId', 'INTEGER', 'sf_filebase_directories', 'ID', false, null);

	} // doBuild()

} // sfFilebaseFileMapBuilder
