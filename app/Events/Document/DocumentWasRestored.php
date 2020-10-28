<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Events\Document;

use App\Models\Company;
use App\Models\Document;
use Illuminate\Queue\SerializesModels;

/**
 * Class DocumentWasRestored.
 */
class DocumentWasRestored
{
    use SerializesModels;

    /**
     * @var Document
     */
    public $document;

    public $company;

    public $event_vars;

    /**
     * Create a new event instance.
     *
     * @param Document $document
     * @param Company $company
     * @param array $event_vars
     */
    public function __construct(Document $document, Company $company, array $event_vars)
    {
        $this->document = $document;
        $this->company = $company;
        $this->event_vars = $event_vars;
    }
}
