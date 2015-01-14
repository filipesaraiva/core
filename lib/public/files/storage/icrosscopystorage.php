<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCP\Files\Storage;

/**
 * For storage backends that allow copying across storage boundaries
 */
interface ICrossCopyStorage {
	/**
	 * @param \OCP\Files\Storage $sourceStorage
	 * @param string $sourceInternalPath
	 * @param string $targetInternalPath
	 * @return bool true on success, false if the cross storage copy is not possible
	 */
	public function crossCopy(\OCP\Files\Storage $sourceStorage, $sourceInternalPath, $targetInternalPath);

	/**
	 * @param \OCP\Files\Storage $sourceStorage
	 * @param string $sourceInternalPath
	 * @param string $targetInternalPath
	 * @return bool true on success, false if the cross storage copy is not possible
	 */
	public function crossMove(\OCP\Files\Storage $sourceStorage, $sourceInternalPath, $targetInternalPath);
}
